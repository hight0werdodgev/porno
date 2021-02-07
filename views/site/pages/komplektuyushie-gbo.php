<?php

use yii\helpers\Url;

$this->title = 'Комплектующие для ГБО в Кургане по самым НИЗКИМ ценам - Gasline';
$this->registerMetaTag(['name' => 'description', 'content' => 'Клапана, редукторы, газовые инжекторы, блоки управления, датчики, фильтры, форсунки и другие комплектующие в Кургане можно найти в Gasline.']);
?>


<!--HOME SECTION START-->
<section class="home">
    <video class="home__video" muted loop autoplay>
        <source src="/dist/video/main5.mp4" type="video/mp4">
    </video>
    <div class="home__title_wrap">
        <h1 class="home__title">
            Комплектующие ГБО в Кургане
        </h1>
        <button type="button" class="btn b24-web-form-popup-btn-9">Заказать услугу</button>
    </div>
</section>
<!--HOME SECTION END-->


<?//=\Yii::$app->view->renderFile('@app/views/site/sections/banner.php');?>


<section class="about-service">
    <div class="container">
        <div class="about-service__title title">Об услуге</div>
        <ul class="about-service__list">
            <li class="about-service__item">
                <a href="<?= Url::to(['komplektuyushie-gbo/multiklapan']);?>" class="about-service__link">
                    <div class="about-service__item-img-wrap">
                        <img src="/dist/img/png/about-service_1.png" alt="" class="about-service__item-img">
                    </div>
                    <div class="about-service__item-descr">
                        <div class="about-service__item-descr-title">Мультиклапан</div>
                        <div class="about-service__item-descr-price">от 1800 руб.</div>
                    </div>
                </a>
            </li>
            <li class="about-service__item">
                <a href="<?= Url::to(['komplektuyushie-gbo/reduktor']);?>" class="about-service__link">
                    <div class="about-service__item-img-wrap">
                        <img src="/dist/img/png/about-service_2.png" alt="" class="about-service__item-img">
                    </div>
                    <div class="about-service__item-descr">
                        <div class="about-service__item-descr-title">Редуктор</div>
                        <div class="about-service__item-descr-price">от 3000 руб.</div>
                    </div>
                </a>
            </li>
            <li class="about-service__item">
                <a href="<?= Url::to(['komplektuyushie-gbo/gazovie-injektori']);?>" class="about-service__link">
                    <div class="about-service__item-img-wrap">
                        <img src="/dist/img/png/about-service_3.png" alt="" class="about-service__item-img">
                    </div>
                    <div class="about-service__item-descr">
                        <div class="about-service__item-descr-title">Газовые инжекторы</div>
                        <div class="about-service__item-descr-price">от 2500 руб.</div>
                    </div>
                </a>
            </li>
            <li class="about-service__item">
                <a href="<?= Url::to(['komplektuyushie-gbo/blok-upravleniya-gbo']);?>" class="about-service__link">
                    <div class="about-service__item-img-wrap">
                        <img src="/dist/img/png/about-service_4.png" alt="" class="about-service__item-img">
                    </div>
                    <div class="about-service__item-descr">
                        <div class="about-service__item-descr-title">Блок управления ГБО</div>
                        <div class="about-service__item-descr-price">от 4000 руб.</div>
                    </div>
                </a>
            </li>
            <li class="about-service__item">
                <a href="<?= Url::to(['komplektuyushie-gbo/datchik-mar']);?>" class="about-service__link">
                    <div class="about-service__item-img-wrap">
                        <img src="/dist/img/png/about-service_5.png" alt="" class="about-service__item-img">
                    </div>
                    <div class="about-service__item-descr">
                        <div class="about-service__item-descr-title">Датчик МАР</div>
                        <div class="about-service__item-descr-price">от 1500 руб.</div>
                    </div>
                </a>
            </li>
            <li class="about-service__item">
                <a href="<?= Url::to(['komplektuyushie-gbo/filtri-gbo']);?>" class="about-service__link">
                    <div class="about-service__item-img-wrap">
                        <img src="/dist/img/png/about-service_6.png" alt="" class="about-service__item-img">
                    </div>
                    <div class="about-service__item-descr">
                        <div class="about-service__item-descr-title">Фильтры ГБО</div>
                        <div class="about-service__item-descr-price">от 100 руб.</div>
                    </div>
                </a>
            </li>

        </ul>
        <button class="btn b24-web-form-popup-btn-9">Узнать стоимость</button>
    </div>
</section>

<?=\Yii::$app->view->renderFile('@app/views/site/sections/whywe.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/certificates.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/portfolio.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/time.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/questions.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/about.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/contacts.php');?>