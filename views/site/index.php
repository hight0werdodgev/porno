<?php
use yii\helpers\Url;
$this->title = 'Gasline – Комплекс услуг ГБО в Кургане';
$this->registerMetaTag(['name' => 'description', 'content' => 'Весь перечень услуг ГБО в Кургане в рассрочку до 4-х месяцев без переплат и %. 4-е поколение ГБО с гарантией от производителя. Быстро переоборудуем Ваш автомобиль и поможем оформить документы в ГИБДД.']);
?>

<!--HOME SECTION START-->
<section class="home">
    <video class="home__video" muted loop autoplay>
        <source src="/dist/video/video.mp4" type="video/mp4">
    </video>
    <div class="home__title_wrap">
        <h1 class="home__title">
            Комплекс услуг ГБО
        </h1>
        <button type="button" class="btn b24-web-form-popup-btn-9">Заказать услугу</button>
    </div>
</section>
<!--HOME SECTION END-->


<?//=\Yii::$app->view->renderFile('@app/views/site/sections/banner.php');?>


<!--WHAT-WE-DO SECTION START-->
<section class='what-we-do'>
    <div class="container">
        <h4 class="what-we-do__title">Перевод авто на газ</h4>
        <div class="what-we-do__p">Сервисный центр «Линия газа» оказывает комплекс услуг по установке
            газобаллонного оборудования, техническому освидетельствованию
            баллонов, ремонту и обслуживанию газовой аппаратуры. Компоненты ГБО в наличии и под заказ.
        </div>
    </div>
</section>
<!--WHAT-WE-DO SECTION END-->

<?=\Yii::$app->view->renderFile('@app/views/site/sections/services.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/presents.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/portfolio.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/whywe.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/certificates.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/time.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/questions.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/about.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/contacts.php');?>