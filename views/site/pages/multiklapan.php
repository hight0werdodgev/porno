<?php
use yii\helpers\Url;

$this->title = 'Купить Мультиклапан в Кургане цена - Gasline45';
$this->params['breadcrumbs'][] = ['label' => 'Комплектующие ГБО', 'url' => ['site/page', 'view'  => 'komplektuyushie-gbo']];
$this->params['breadcrumbs'][] = 'Мультиклапан';
$this->registerMetaTag(['name' => 'description', 'content' => 'Купить Мультиклапан в Кургане по низкой цене, гарантия от производителя. Другие комплектующие для газобаллонного оборудования вы найдёте в нашем каталоге.']);
?>

<section class="komlektuyshie-item">
    <div class="container">
        <div class="komlektuyshie-item__title title">Мультиклапан</div>
        <div class="komlektuyshie-item__wrap">
            <div class="komlektuyshie-item__img-wrap">
                <img src="/dist/img/png/komlektuyshie-item_1.png" alt="" class="komlektuyshie-item__img">
            </div>
            <div class="komlektuyshie-item__desc">
                <div class="komlektuyshie-item__desc-text">
                    На баллоны для сжиженного газа устанавливается специальный мультиклапан, через который производится заправка баллона и отбор газа в топливную систему двигателя. Мультиклапан является важным компонентом газобаллонного оборудования, обеспечивающим его безопасное использование.
                </div>
                <div class="komlektuyshie-item__desc-price">1050 руб.</div>
                <button class="btn btn_komlektuyshie-item b24-web-form-popup-btn-9">Узнать о наличии</button>
            </div>
        </div>
        <div class="komlektuyshie-item__wrap-block">
            <div class="komlektuyshie-item__wrap-block-title">
                Он включает в себя
            </div>
            <ul class="komlektuyshie-item__wrap-bloc-list">
                <li class="komlektuyshie-item__wrap-bloc">Заправочный и расходный вентиль
                </li>
                <li class="komlektuyshie-item__wrap-bloc">Указатель уровня газа в баллоне. Представляет собой поплавок на рычаге, находящийся внутри баллона, и связанный с ним стрелочный
                    индикатор либо электронную схему, передающую информацию о положении поплавка на индикатор внутри салона автомобиля
                </li>
                <li class="komlektuyshie-item__wrap-bloc">Обратный клапан в заправочной магистрали, предотвращающий вытекание газа через нее
                </li>
                <li class="komlektuyshie-item__wrap-bloc">Скоростной клапан в расходной магистрали, перекрывающий подачу газа при превышении его расходом некоторого порогового значения.
                    Порог подобран так, чтобы клапан закрывался только пи разрыве расходной магистрали (предотвращая, таким образом, сильную утечку газа),
                    и оставался открытым при обычном уровне расхода газа.
                </li>
                <li class="komlektuyshie-item__wrap-bloc">Стопорный клапан, предотвращающий наполнение баллона газом более чем на 80-90%. Клапан находится в заправочной магистрали
                    и закрывается при достижении указанной степени заполнения баллона. Ограничение максимального наполнения баллона необходимо для
                    предотвращения чрезмерного повышения давления в нем в случае нагерва (например, на солнце в жаркую погоду).
                </li>
            </ul>
        </div>
    </div>
</section>

<?=\Yii::$app->view->renderFile('@app/views/site/sections/whywe.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/certificates.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/time.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/questions.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/about.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/contacts.php');?>