<?php

use yii\helpers\Url;

?>
<section class='services'>
    <div class="container">
        <?php echo ($h1 ? $h1 : ''); ?>
        <?php echo ($h2 ? $h2 : '<h2 class="services__title">Наши услуги</h2>'); ?>
        <ul class="services__links_list">
            <li class="services__links_item"><a href="<?= Url::to(['site/page', 'view'  => 'obsluzhivanie-gbo'])?>">Обслуживание ГБО</a></li>
            <li class="services__links_item"><a href="<?= Url::to(['site/page', 'view'  => 'ustanovka-gbo'])?>">Установка ГБО</a></li>
            <li class="services__links_item"><a href="<?= Url::to(['site/page', 'view'  => 'oformlenie-pereoborudovaniya'])?>">Оформление переоборудования</a></li>
            <li class="services__links_item"><a href="<?= Url::to(['site/page', 'view'  => 'opressovka-gbo'])?>">Опрессовка ГБО</a></li>
            <li class="services__links_item"><a href="<?= Url::to(['site/page', 'view'  => 'osvidetelstvovanie-gbo'])?>">Освидетельствование баллонов</a></li>
            <li class="services__links_item"><a href="<?= Url::to(['site/page', 'view'  => 'gazovie-ballony'])?>">Газовые баллоны</a></li>
            <li class="services__links_item"><a href="<?= Url::to(['site/page', 'view'  => 'komplektuyushie-gbo'])?>">Комплектующие ГБО</a></li>
            <li class="services__links_item"><a href="<?= Url::to(['site/page', 'view'  => 'registratsiya-gbo'])?>">Регистрация ГБО</a></li>
        </ul>
    </div>
</section>