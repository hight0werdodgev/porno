<?php

use yii\helpers\Url;

$this->title = 'Купить Блок управления в Кургане цена - Gasline45';
$this->params['breadcrumbs'][] = ['label' => 'Комплектующие ГБО', 'url' => ['site/page', 'view'  => 'komplektuyushie-gbo']];
$this->params['breadcrumbs'][] = 'Блок управления';
$this->registerMetaTag(['name' => 'description', 'content' => 'Купить Блок управления в Кургане по низкой цене, гарантия от производителя. Другие комплектующие для газобаллонного оборудования вы найдёте в нашем каталоге.']);
?>

<section class="komlektuyshie-item">
    <div class="container">
        <div class="komlektuyshie-item__title title">Блок управления</div>
        <div class="komlektuyshie-item__wrap">
            <div class="komlektuyshie-item__img-wrap">
                <img src="/dist/img/png/komlektuyshie-item_4.png" alt="" class="komlektuyshie-item__img">
            </div>
            <div class="komlektuyshie-item__desc">
                <div class="komlektuyshie-item__desc-text">
                    Блок управления (БУ) считывает и генерирует данные микропроцессора и дает сигналы
                    управления, которые открывают электромагнитные форсунки впрыска газового топлива и,
                    которые блокируют форсунки подачи бензина. Данные, по которым система создает нужную
                    концентрацию для подачи в систему двигателя.
                </div>
                <div class="komlektuyshie-item__desc-price">4000 руб.</div>
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