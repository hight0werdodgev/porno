<?php

use yii\helpers\Url;

$this->title = 'Купить Газовые инжекторы в Кургане цена - Gasline45';
$this->params['breadcrumbs'][] = ['label' => 'Комплектующие ГБО', 'url' => ['site/page', 'view'  => 'komplektuyushie-gbo']];
$this->params['breadcrumbs'][] = 'Газовые инжекторы';
$this->registerMetaTag(['name' => 'description', 'content' => 'Купить Газовые инжекторы в Кургане по низкой цене, гарантия от производителя. Другие комплектующие для газобаллонного оборудования вы найдёте в нашем каталоге.']);
?>

<section class="komlektuyshie-item">
    <div class="container">
        <div class="komlektuyshie-item__title title">Газовые инжекторы</div>
        <div class="komlektuyshie-item__wrap">
            <div class="komlektuyshie-item__img-wrap">
                <img src="/dist/img/png/komlektuyshie-item_3.png" alt="" class="komlektuyshie-item__img">
            </div>
            <div class="komlektuyshie-item__desc">
                <div class="komlektuyshie-item__desc-text">
                    Форсунки газовые – это устройства в ГБО 4 поколения. Задача форсунки ГБО
                    4 поколения состоит в том, чтобы распределять газ (метан или пропан) по
                    цилиндрам, поступающий из редуктора. Они отвечают за количество смеси,
                    поступающей в двигатель и за период, в который происходит впрыск в систему
                    впускного коллектора.
                </div>
                <div class="komlektuyshie-item__desc-price">2500 руб.</div>
                <button class="btn btn_komlektuyshie-item b24-web-form-popup-btn-9">Узнать о наличии</button>
            </div>
        </div>
    </div>
</section>

<?=\Yii::$app->view->renderFile('@app/views/site/sections/whywe.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/certificates.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/time.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/questions.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/about.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/contacts.php');?>