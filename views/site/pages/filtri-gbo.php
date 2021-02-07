<?php

use yii\helpers\Url;

$this->title = 'Купить Фильтры ГБО в Кургане цена - Gasline45';
$this->params['breadcrumbs'][] = ['label' => 'Комплектующие ГБО', 'url' => ['site/page', 'view'  => 'komplektuyushie-gbo']];
$this->params['breadcrumbs'][] = 'Фильтры ГБО';
$this->registerMetaTag(['name' => 'description', 'content' => 'Купить Фильтры ГБО в Кургане по низкой цене, гарантия от производителя. Другие комплектующие для газобаллонного оборудования вы найдёте в нашем каталоге.']);
?>

<section class="komlektuyshie-item">
    <div class="container">
        <div class="komlektuyshie-item__title title">Фильтры ГБО</div>
        <div class="komlektuyshie-item__wrap">
            <div class="komlektuyshie-item__img-wrap">
                <img src="/dist/img/png/komlektuyshie-item_6.png" alt="" class="komlektuyshie-item__img">
            </div>
            <div class="komlektuyshie-item__desc">
                <div class="komlektuyshie-item__desc-text">
                    Очистка газа ГБО проводится как правило в два этапа и для этого существует 2 типа фильтров:
                    1. Фильтр грубой очистки или фильтр жидкой фазы
                    В баллонах газ находится в жидком состоянии и под давлением, перед тем как поступить в редуктор, он проходит через фильтр грубой очистки, где газ очищается от металлической пыли.
                    2. Фильтр тонкой очистки
                    Просим заметить, что фильтр тонкой очистки присутствует только на инжекторных автомобилях, такой тип фильтра ГБО как правило устанавливается перед газовыми форсунками, чтобы предотвратить их загрязнение веществами, образующимися при преобразовании газа из жидкого состояния в пар.
                </div>
                <div class="komlektuyshie-item__desc-price">100 руб.</div>
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