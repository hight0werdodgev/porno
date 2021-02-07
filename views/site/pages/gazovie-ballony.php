<?php
use yii\helpers\Url;

$this->title = 'Купить Газовые баллоны в Кургане цена - Gasline45';
$this->registerMetaTag(['name' => 'description', 'content' => 'Газовые баллоны используются для хранения, транспортировки и использования сжатых газов таких как пропан и метан. Gasline предлагает большой ассортимент газовых баллонов в Кургане .']);
?>


<section class="home">
    <video class="home__video" muted loop autoplay>
        <source src="/dist/video/main6.mp4" type="video/mp4">
    </video>
    <div class="home__title_wrap">
        <h1 class="home__title">
            Газовые баллоны в Кургане
        </h1>
        <button type="button" class="btn b24-web-form-popup-btn-9">Заказать услугу</button>
    </div>
</section>
<!--HOME SECTION END-->


<?//=\Yii::$app->view->renderFile('@app/views/site/sections/banner.php');?>


<section class="balloni">
    <div class="container">
        <div class="balloni__title title">Об услуге</div>
        <div class="balloni__row">Сервисный центр «Линия газа» оказывает услуги по освидетельствованию и продаже газовых баллонов</div>
        <ul class="balloni__list">
            <li class="balloni__item">
                <div class="balloni__item-img-wrap">
                    <img src="/dist/img/png/balloni_1.png" alt="" class="balloni__item-img">
                </div>
                <div class="balloni__item-text">Автомобильные</div>
<!--                <div class="balloni__item-text">+</div>-->
<!--                <div class="balloni__item-text">Освидетельствование, продажа</div>-->
            </li>
            <li class="balloni__item">
                <div class="balloni__item-img-wrap">
                    <img src="/dist/img/png/balloni_2.png" alt="" class="balloni__item-img">
                </div>
                <div class="balloni__item-text">Бытовые</div>
<!--                <div class="balloni__item-text">+</div>-->
<!--                <div class="balloni__item-text">Освидетельствование</div>-->
            </li>
            <li class="balloni__item">
                <div class="balloni__item-img-wrap">
                    <img src="/dist/img/png/balloni_3.png" alt="" class="balloni__item-img">
                </div>
                <div class="balloni__item-text">Технические газы</div>
<!--                <div class="balloni__item-text">+</div>-->
<!--                <div class="balloni__item-text">Освидетельствование</div>-->
            </li>
        </ul>

        <button class="btn b24-web-form-popup-btn-9">Узнать условия</button>
    </div>
</section>

<?=\Yii::$app->view->renderFile('@app/views/site/sections/whywe.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/certificates.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/portfolio.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/time.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/questions.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/about.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/contacts.php');?>