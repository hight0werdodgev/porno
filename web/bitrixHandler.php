<?php
/*
    Plugin Name: BobMVIntegration45Reg
    Author: @bobmv & @xxxnonsense
	Description: Интеграция WPForm & WooCommerce и CRM Bitrix24. Генерация лидов с привязкой UTM-меток и Google CID
	Version: 1.1.0
*/
define('B24_WEBHOOK', 'https://45-reg.bitrix24.ru/rest/267/2mabltys1p5m72ms/');
define('TEST_EMAIL', 'bobmvone@gmail.com');


function execCurlBitrix($method, $var)
{
    $queryUrl = B24_WEBHOOK . $method . '.json';
    $queryData = http_build_query($var);
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_POST => 1,
        CURLOPT_HEADER => 0,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $queryUrl,
        CURLOPT_POSTFIELDS => $queryData,
    ));
    return json_decode(curl_exec($curl), true);
}

function createLead($data)
{
    return execCurlBitrix('crm.lead.add', $data);
}

function contactGet($data)
{
    return execCurlBitrix('crm.contact.list', $data);
}

function leadAddProduct($data)
{
    return execCurlBitrix('crm.lead.productrows.set', $data);
}

function getExistContact($phone = null, $email = null)
{
    $contactId = null;
    if ($phone)
        $contactId = contactGet([
            'order' => ['DATE_CREATE' => 'ASC'],
            'filter' => ['PHONE' => $phone]
        ]);
    if (is_array($contactId) && isset($contactId['result']) && !empty($contactId['result']))
        $contactId = $contactId['result'][0]['ID'];
    else if ($email) {
        $contactId = contactGet([
            'order' => ['DATE_CREATE' => 'ASC'],
            'filter' => ['EMAIL' => $email]
        ]);
        if (is_array($contactId) && isset($contactId['result']) && !empty($contactId['result'])) {
            $contactId = $contactId['result'][0]['ID'];
        } else
            $contactId = null;
    } else
        $contactId = null;
    return $contactId;
}

function formSuccess($data)
{
    $formName = 'Веб-форма: '.$data['formName'];
    $phone = $data['phone'] == null ?: [['VALUE' => $data['phone'], 'VALUE_TYPE' => "WORK"]];
    $contactId = getExistContact($phone);
    $leadCreateResponse = createLead(['fields' => [
        'TITLE' => $formName,
        'NAME' => $data['name'],
        'CONTACT_ID' => $contactId,            
	'SOURCE_ID' => '78007777564',//WEB
        'PHONE' => $phone,
        'COMMENTS'=>$data['comments'],
        'SOURCE_DESCRIPTION' => 'gasline45.ru',
        'UTM_CAMPAIGN' => $_COOKIE['utm_campaign'],
        'UTM_CONTENT' => $_COOKIE['utm_content'],
        'UTM_MEDIUM' => $_COOKIE['utm_medium'],
        'UTM_SOURCE' => $_COOKIE['utm_source'],
        'UTM_TERM' => $_COOKIE['utm_term'],
        'UF_CRM_1608579695' => $_COOKIE['_ga'],
        'ASSIGNED_BY_ID' => '203',//Чендереев
        'UF_CRM_1608369184205' => '2579'//УИТЛ
    ],
        'params' => ['REGISTER_SONET_EVENT' => 'Y']]);

    mail(TEST_EMAIL, '45-reg: postedData', wordwrap(json_encode($_REQUEST)));
}
if (!empty($_REQUEST))
{
    formSuccess($_REQUEST);
    echo json_encode(['status'=>'success']);
}
