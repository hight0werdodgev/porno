<?php
use yii\helpers\Url;

$this->title = 'Оформление переоборудования в Кургане - Gasline';
$this->registerMetaTag(['name' => 'description', 'content' => 'Как быстро оформить документы на переоборудование транспортных средств в Кургане? Обращайтесь в Gasline. Профессионально подготовим полный пакет документов на переоборудование транспортного средства. ']);
?>


<!--HOME SECTION START-->
<section class="home">
    <video class="home__video" muted loop autoplay>
        <source src="/dist/video/main8.mp4" type="video/mp4">
    </video>
    <div class="home__title_wrap">
        <h1 class="home__title">
            Оформление переоборудования в Кургане
        </h1>
        <button type="button" class="btn b24-web-form-popup-btn-9">Заказать услугу</button>
    </div>
</section>
<!--HOME SECTION END-->

<?//=\Yii::$app->view->renderFile('@app/views/site/sections/banner.php');?>


<section class='formalization'>
    <div class="container">
        <div class="formalization__row">Сервисный центр «Линия газа» оказывает услуги по оформлению изменений в конструкции
            транспортного средства:
        </div>
        <ul class="formalization__list">
            <li class="formalization__item">
                <div class="formalization__item-title">Регистрация ГБО</div>
                <div class="formalization__item-img-wrap">
                    <img src="/dist/img/png/formalization_1.png" alt="" class="formalization__item-img">
                </div>
            </li>
            <li class="formalization__item">
                <div class="formalization__item-title">Оформление нестандартного тюнинга</div>
                <div class="formalization__item-img-wrap">
                    <img src="/dist/img/png/formalization_2.png" alt="" class="formalization__item-img">
                </div>
            </li>
            <li class="formalization__item">
                <div class="formalization__item-title">Смена категории ТС</div>
                <div class="formalization__item-img-wrap">
                    <img src="/dist/img/png/formalization_3.png" alt="" class="formalization__item-img">
                </div>
            </li>
            <li class="formalization__item">
                <div class="formalization__item-title">Переоборудование в спецтехнику</div>
                <div class="formalization__item-img-wrap">
                    <img src="/dist/img/png/formalization_4.png" alt="" class="formalization__item-img">
                </div>
            </li>
            <li class="formalization__item">
                <div class="formalization__item-title">Замена ДВС</div>
                <div class="formalization__item-img-wrap">
                    <img src="/dist/img/png/formalization_5.png" alt="" class="formalization__item-img">
                </div>
            </li>
        </ul>
        <div class="formalization__title title">Для чего?</div>
        <div class="formalization__row">Все просто. Любое изменение конструкции вашего ТС должно быть зарегистрировано в ГИБДД,
            иначе вам будет выписан штраф.</div>
        <button type="button" class="btn b24-web-form-popup-btn-9">Хочу консультацию</button>
    </div>
</section>
<!--formal SECTION END -->

<?=\Yii::$app->view->renderFile('@app/views/site/sections/whywe.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/certificates.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/time.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/questions.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/about.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/contacts.php');?>