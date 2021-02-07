<?php

use yii\helpers\Url;

    $this->title = 'Опрессовка ГБО в Кургане - Gasline';
    $this->registerMetaTag(['name' => 'description', 'content' => 'Опрессовка предназначена для выявления водопроницаемости и прочности газобаллонного оборудования. В Кургане испытания проводят воздухом и водой. Если процедура опрессовки ГБО прошла успешно, оборудование пригодно для эксплуатации. ']);

?>
<!--HOME SECTION START-->
<section class="home">
    <video class="home__video" muted loop autoplay>
        <source src="/dist/video/main3.mp4" type="video/mp4">
    </video>
    <div class="home__title_wrap">
        <h1 class="home__title">
            Опрессовка ГБО в Кургане
        </h1>
        <button type="button" class="btn b24-web-form-popup-btn-9">Заказать услугу</button>
    </div>
</section>
<!--HOME SECTION END-->


<?//=\Yii::$app->view->renderFile('@app/views/site/sections/banner.php');?>


<section class="for-what">
    <div class="container">
        <div class="for-what__title">Для чего?</div>
        <ul class="for-what__list">
            <li class="for-what__item">
                <div class="for-what__number">
                    1
                </div>
                <div class="for-what__row">Для безопасности себя и окружающих.</div>
            </li>
            <li class="for-what__item">
                <div class="for-what__number">2
                </div>
                <div class="for-what__row">Для оформления ГБО в ГИБДД.</div>
            </li>
            <li class="for-what__item">
                <div class="for-what__number">3
                </div>
                <div class="for-what__row">Для предоставления документов о безопасности баллона на АГЗС.</div>
            </li>
            <li class="for-what__item">
                <div class="for-what__number">4
                </div>
                <div class="for-what__row">Для прохождения технического осмотра.</div>
            </li>
        </ul>
    </div>
</section>


<section class="process">
    <div class="container">
        <div class="process__title">Как проходит?</div>


        <div class="process__row">Испытания проводят</div>
        <div class="process__title-row">Водой</div>
        <ol class="line__list">
            <li class="line__item">Сосуд погружается в воду</li>
            <li class="line__item">Проверяется инертным газом или сжатым воздухом</li>
            <li class="line__item">Возможная замена газа одного на другой</li>
            <li class="line__item">Определяется герметичность</li>
        </ol>
        <div class="process-air">
            <div class="process__title-row">Воздухом</div>
            <ol class="line__list">
                <li class="line__item">Из сосуда откачивается весь воздух и его заполняют водой</li>
                <li class="line__item">Подаётся на сосуд давление</li>
                <li class="line__item">Возможная замена газа одного на другой</li>
                <li class="line__item">Определяется герметичность</li>
            </ol>
        </div>
        <div class="process__p">
            Если процедура опрессовки ГБО прошла успешно, оборудование пригодно для установки на транспортное средство и дальнейшей эксплуатации.
            Баллон передается на проверку, где ставится клеймо и вносятся данные в паспорт.
        </div>
        <button class="btn b24-web-form-popup-btn-9">Хочу консультацию</button>
    </div>
</section>


<section class="demand">
    <div class="container">
        <div class="demand__p">Основное требование правительства о процессе регистрации ГБО, которое вышло в 2019 г. - выполнять
            монтаж ГБО должен сертифицированный центр, иначе узаконить ГБО не представляется возможным.
            Постановление так же четко указывает порядок проведения процедуры и перечень необходимых документов.
        </div>

    </div>
</section>


<section class="if">
    <div class="container">
        <h3 class="if__title">Если ГБО не зарегистрировано</h3>
        <ul class="if__list">
            <li class="if_item">Вам выпишут штраф 500 рублей и предписания на снятия газобаллонного оборудования.</li>
            <li class="if_item">Если же вас останавливают повторно, то вы
                получаете 15 суток за неисполнение предписания,
                авто отправляется на штрафстоянку.</li>
        </ul>
        <div class="if__p">Не оформленное ГБО - не прохождение гос. осмотра,
            сложности при продаже авто и прочие проблемы.
        </div>
        <button class="btn b24-web-form-popup-btn-9">Хочу консультацию</button>
    </div>
</section>


<section class="price-register">
    <div class="container">
        <h3 class="price-register__title">Стоимость регистрации ГБО в Кургане
            <span class="price-register__number">4 000</span>
            руб.
        </h3>
        <button class="btn b24-web-form-popup-btn-9">Хочу консультацию</button>
    </div>
</section>

<?=\Yii::$app->view->renderFile('@app/views/site/sections/presents.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/whywe.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/certificates.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/time.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/questions.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/about.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/contacts.php');?>