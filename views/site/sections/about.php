<?php

use yii\helpers\Url;

?>
<section class="about">
    <div class="container container_about">
        <div class="about__description">
            <div class="about__description-title">О нас</div>
            <div class="about__description-text">Сервисный центр «Линия Газа» выполняет весь спектр услуг
                ГБО в Кургане.
                Начиная с первичной диагностики вашего автомобиля, заканчивая оформлением всех видов переоборудования.
                Мы ждем вас на дальнейшее <a href="<?= Url::to(['site/page', 'view'  => 'obsluzhivanie-gbo'])?>">обслуживание
                    ГБО</a>.
                С нами вы пройдете процедуру <a href="<?= Url::to(['site/page', 'view'  => 'oformlenie-pereoborudovaniya'])?>">переоборудования</a> максимально быстро
                и качественно. Мы работаем с различным оборудованием на любой кошелек.
                Вы не будете скучать во время <a href="<?= Url::to(['site/page', 'view'  => 'ustanovka-gbo'])?>">установки ГБО</a>, ведь в нашем сервисе есть
                комфортная зона ожидания, где есть диванчики, кофе/чай, TV и Wi-Fi.</div>
            <button type="button" class="btn b24-web-form-popup-btn-9">Заказать услугу</button>
        </div>
        <div class="about__description_video">
            <!-- <video class="about__video" muted>
                <source src="video/video.mp4" type="video/mp4">
            </video> -->
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/1_qPoa1Nsd8" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
        </div>
    </div>
</section>