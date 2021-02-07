<?php
use yii\helpers\Url;

$this->title = 'Купить Редуктор в Кургане цена - Gasline45';
$this->params['breadcrumbs'][] = ['label' => 'Комплектующие ГБО', 'url' => ['site/page', 'view'  => 'komplektuyushie-gbo']];
$this->params['breadcrumbs'][] = 'Редуктор';
$this->registerMetaTag(['name' => 'description', 'content' => 'Купить Редуктор в Кургане по низкой цене, гарантия от производителя. Другие комплектующие для газобаллонного оборудования вы найдёте в нашем каталоге.']);
?>

<section class="komlektuyshie-item">
    <div class="container">
        <div class="komlektuyshie-item__title title">Редуктор</div>
        <div class="komlektuyshie-item__wrap">
            <div class="komlektuyshie-item__img-wrap">
                <img src="/dist/img/png/komlektuyshie-item_2.png" alt="" class="komlektuyshie-item__img">
            </div>
            <div class="komlektuyshie-item__desc">
                <div class="komlektuyshie-item__desc-text">
                    Редуктор газобаллонного оборудования (ГБО) – устройство, предназначенное для испарения газа, поступающего из баллонов в топливную систему и поддержки в ней давления, необходимого для нормальной работы двигателя.
                </div>
                <div class="komlektuyshie-item__desc-price">3000 руб.</div>
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