<?php
use yii\helpers\Url;

    $this->title = 'Обслуживание ГБО в Кургане - Gasline';
    $this->registerMetaTag(['name' => 'description', 'content' => 'Любое оборудование нуждается в техническом обслуживании. ГБО не является исключением. Как правило ГБО обслуживают раз в 10000 км.']);

?>

<!--HOME SECTION START-->
<section class="home">
    <video class="home__video" muted loop autoplay>
        <source src="/dist/video/main4.mp4" type="video/mp4">
    </video>
    <div class="home__title_wrap">
        <h1 class="home__title">
            Обслуживание ГБО в Кургане
        </h1>
        <button type="button" class="btn b24-web-form-popup-btn-9">Заказать услугу</button>
    </div>
</section>
<!--HOME SECTION END-->

<?//=\Yii::$app->view->renderFile('@app/views/site/sections/banner.php');?>


<section class="opressovka">
    <div class="container container_pressovka">
        <div class="opressovka__how-often">
            <div class="opressovka__how-often-title">Как часто?</div>
            <ul class="opressovka__how-often-list">
                <li class="opressovka__how-often-item">
                    <div class="opressovka__how-often-img-wrap">
                        <img src="/dist/img/png/opressovka_1.png" alt="" class="opressovka__how-often-img">
                    </div>
                    <div class="opressovka__how-often-description">Раз в месяц чистка и замена
                        фильтров ГБО</div>
                </li>
                <li class="opressovka__how-often-item">
                    <div class="opressovka__how-often-img-wrap">
                        <img src="/dist/img/png/opressovka_2.png" alt="" class="opressovka__how-often-img">
                    </div>
                    <div class="opressovka__how-often-description">Раз в году производить разборку
                        и чистку редуктора</div>
                </li>
            </ul>
        </div>
        <div class="opressovka__for-what">
            <div class="opressovka__for-what-title">Для чего?</div>
            <ul class="opressovka__for-what-list">
                <li class="opressovka__for-what-item">
                    <div class="opressovka__for-what-img-wrap">
                        <img src="/dist/img/png/opressovka_3.png" alt="" class="opressovka__for-what-img">
                    </div>
                    <div class="opressovka__for-what-description">Успешной работы</div>
                </li>
                <li class="opressovka__for-what-item">
                    <div class="opressovka__for-what-img-wrap">
                        <img src="/dist/img/png/opressovka_4.png" alt="" class="opressovka__for-what-img">
                    </div>
                    <div class="opressovka__for-what-description">Длительного срока эксплуатации</div>
                </li>
            </ul>
        </div>
    </div>
</section>


<section class="line opressovka-line line_obslushivanie">
    <div class="container">
        <div class="line_opressovka__title">Как проходит?</div>
        <ol class="line__list">
            <li class="line__item">Ваш авто пребывает в наш сервисный центр</li>
            <li class="line__item">Оцениваем состояние
                газовых соединений
                магистралей</li>
            <li class="line__item">Осуществляем
                компьютерную
                диагностику системы</li>
            <li class="line__item">Устраняем
                возможные
                неисправности</li>
            <li class="line__item">Замена тонкого
                фильтра и фильтра
                глубокой очистки</li>
            <li class="line__item">Проверка
                на герметичность</li>
        </ol>
        <div class="line_opressovka__title">Сколько времени занимает?</div>
        <div class="line_opressovka__time">1.5-2</div>
        <div class="line_opressovka__hour">часа</div>
        <div class="line_opressovka__row">В некоторых случаях, временной период значительно короче.</div>
        <button class="btn b24-web-form-popup-btn-9">Хочу консультацию</button>
    </div>
</section>


<section class="obslushivanie-price">
    <div class="container">
        <div class="obslushivanie-price__title title">Стоимость</div>
        <div class="obslushivanie-price__p">Стоимость обслуживания ГБО зависит от количества цилиндров в транспортном средстве.
            Цену можно уточнить по телефону горячей линии <nobr>(3522)&nbsp;228-999</nobr>, которая работает круглосуточно.
        </div>
        <button class="btn b24-web-form-popup-btn-9">Узнать стоимость</button>
    </div>
</section>

<?=\Yii::$app->view->renderFile('@app/views/site/sections/presents.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/whywe.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/certificates.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/time.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/questions.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/about.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/contacts.php');?>