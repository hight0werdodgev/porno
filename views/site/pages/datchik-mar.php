<?php

use yii\helpers\Url;

$this->title = 'Купить Датчик МАР в Кургане цена - Gasline45';
$this->params['breadcrumbs'][] = ['label' => 'Комплектующие ГБО', 'url' => ['site/page', 'view'  => 'komplektuyushie-gbo']];
$this->params['breadcrumbs'][] = 'Датчик МАР';
$this->registerMetaTag(['name' => 'description', 'content' => 'Купить Датчик МАР в Кургане по низкой цене, гарантия от производителя. Другие комплектующие для газобаллонного оборудования вы найдёте в нашем каталоге.']);
?>

<section class="komlektuyshie-item">
    <div class="container">
        <div class="komlektuyshie-item__title title">Датчик МАР</div>
        <div class="komlektuyshie-item__wrap">
            <div class="komlektuyshie-item__img-wrap">
                <img src="/dist/img/png/komlektuyshie-item_5.png" alt="" class="komlektuyshie-item__img">
            </div>
            <div class="komlektuyshie-item__desc">
                <div class="komlektuyshie-item__desc-text">
                    MAP Sensor (Manifold Absolute Pressure, МАП сенсор, МАП датчик) он же датчик абсолютного давления газа, который используется на 4-м поколении ГБО. Используется этот датчик для контроля давления, как это уже понятно из названия. МАП датчик контролирует абсолютное давление (уровень разрежения воздуха во впускном коллекторе) и может быть аналоговым или цифровым. Данные, которые передает MAP Sensor, передаются в ЭБУ, после чего на их основании корректируется ГВС (газовоздушная смесь). Абсолютное давление позволяет также определить степень нагрузки на силовой агрегат, а также угол открытия дроссельной заслонки.
                </div>
                <div class="komlektuyshie-item__desc-price">1500 руб.</div>
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