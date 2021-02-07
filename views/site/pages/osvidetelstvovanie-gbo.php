<?php
use yii\helpers\Url;

$this->title = 'Освидетельствование ГБО в Кургане - Gasline';
$this->registerMetaTag(['name' => 'description', 'content' => 'В Кургане освидетельствование ГБО необходимо для оценки технического состояния резервуара. После ряда процедур выносится заключение, можно ли дальше эксплуатировать баллон.']);
?>



<!--HOME SECTION START-->
<section class="home">
    <video class="home__video" muted loop autoplay>
        <source src="/dist/video/main7.mp4" type="video/mp4">
    </video>
    <div class="home__title_wrap">
        <h1 class="home__title">
            Освидетельствование ГБО в Кургане
        </h1>
        <button type="button" class="btn b24-web-form-popup-btn-9">Заказать услугу</button>
    </div>
</section>
<!--HOME SECTION END-->


<?//=\Yii::$app->view->renderFile('@app/views/site/sections/banner.php');?>


<!--HOME SECTION START-->
<section class="osvidetelstvovanie">
    <div class="container">
        <div class="osvidetelstvovanie__title title">Для чего?</div>
        <div class="osvidetelstvovanie__p">
            Цель проведения испытаний и освидетельствования газового баллона - это контроль над его
            техническим состоянием и принятие решения о его дальнейшей эксплуатации или утилизации.
        </div>
        <div class="osvidetelstvovanie__title title">Каким образом?</div>
        <div class="osvidetelstvovanie__row">1) Проверка газового баллона</div>
        <ul class="osvidetelstvovanie__list">
            <li class="osvidetelstvovanie__item">
                <div class="osvidetelstvovanie__item-img-wrap">
                    <img src="/dist/img/png/osvidetelstvovanie_1.png" alt="" class="osvidetelstvovanie__item-img">
                </div>
                <div class="osvidetelstvovanie__item-row">На наличие маркировки</div>
            </li>
            <li class="osvidetelstvovanie__item">
                <div class="osvidetelstvovanie__item-img-wrap">
                    <img src="/dist/img/png/osvidetelstvovanie_2.png" alt="" class="osvidetelstvovanie__item-img">
                </div>
                <div class="osvidetelstvovanie__item-row">На соответствие ГОСТ</div>
            </li>
            <li class="osvidetelstvovanie__item">
                <div class="osvidetelstvovanie__item-img-wrap">
                    <img src="/dist/img/png/osvidetelstvovanie_3.png" alt="" class="osvidetelstvovanie__item-img">
                </div>
                <div class="osvidetelstvovanie__item-row">На герметичность</div>
            </li>
        </ul>
        <div class="osvidetelstvovanie__row">2) Результаты осмотра и проведенных испытаний заносят в паспорт, сопровождающий изделие
            все время его эксплуатации.
        </div>
        <div class="osvidetelstvovanie__title title">Как часто?</div>
        <div class="osvidetelstvovanie__row">Баллоны, устанавливаемые на автомобили в составе ГБО, должны проходить аттестацию раз в
        </div>
        <div class="osvidetelstvovanie__number">
            <span class="number">3</span> или <span class="number">5</span> лет
        </div>
        <div class="osvidetelstvovanie__img-wrap">
            <img src="/dist/img/png/osvidetelstvovanie.png" alt="" class="osvidetelstvovanie__img">
        </div>
        <button type="button " class="btn button_osvidetelstvovanie b24-web-form-popup-btn-9">Хочу консультацию</button>
        <div class="osvidetelstvovanie__title title">Стоимость</div>
        <div class="osvidetelstvovanie__row">
            От 1 000 руб. до 2 300 руб. Зависит от объема баллона и объема необходимых работ
        </div>
        <button type="button" class="btn b24-web-form-popup-btn-9">Узнать стоимость</button>

    </div>
</section>
<!--HOME SECTION END-->

<?=\Yii::$app->view->renderFile('@app/views/site/sections/whywe.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/certificates.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/time.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/questions.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/about.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/contacts.php');?>