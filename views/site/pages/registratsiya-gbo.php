<?php

use yii\helpers\Url;

$this->title = 'Регистрация ГБО в ГИБДД г.Курган - Gasline';
$this->registerMetaTag(['name' => 'description', 'content' => 'В Кургане установка ГБО на автомобиль является изменением конструкции транспортного средства, иными словами переоборудованием, которое требует обязательного оформления и регистрации. Gasline лучший помощник в оформлении документов и регистрации оборудования в ГИБДД в самые кротчайшие сроки.']);
?>

<section class="home">
    <video class="home__video" muted loop autoplay>
        <source src="../dist/video/main2.mp4" type="video/mp4">
    </video>
    <div class="home__title_wrap">
        <h1 class="home__title">
            Регистрация ГБО в Кургане
        </h1>
        <button type="button" class="btn b24-web-form-popup-btn-9">Заказать услугу</button>
    </div>
</section>
<!--HOME SECTION END-->

<?//=\Yii::$app->view->renderFile('@app/views/site/sections/banner.php');?>

<!--секция с линией-->
<section class="line line_opressovka">
    <div class="container container_line">
        <div class="title">Порядок регистрации ГБО в Кургане</div>
        <ol class="line__list">
            <li class="line__item">Получение заключения
                о возможности установки ГБО
                и предоставлении его в ГИБДД
            </li>
            <li class="line__item">Монтаж установки
                в сертифицированном центре</li>
            <li class="line__item">Контроль в испытательном
                центре с выдачей документов</li>
            <li class="line__item">Регистрация
                переоборудования авто</li>
        </ol>
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
            <div class="price-register__number">4&nbsp;000</div>
            руб.
        </h3>
        <button class="btn b24-web-form-popup-btn-9">Хочу консультацию</button>
    </div>
</section>

<?=\Yii::$app->view->renderFile('@app/views/site/sections/services.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/presents.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/portfolio.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/whywe.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/certificates.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/time.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/questions.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/about.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/contacts.php');?>