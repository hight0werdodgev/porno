<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Установка ГБО на ' . $brand_title;
$this->params['breadcrumbs'][] = ['url' => '/nashi-raboty', 'label' => 'Наши работы'];
$this->params['breadcrumbs'][] = $brand_title;
?>


<section class="nashi-raboti-item">
    <div class="container">
        <h1 class="nashi-raboti-item-main-title">Установка ГБО на <?= $brand_title?>   </h1>
        <?php foreach ($models as $model): ?>
            <div class="nashi-raboti-item-wrap">
                <h2 class="nashi-raboti-item__title"><?= $model->title;?></h2>
                <p class="nashi-raboti-item__p"><?= $model->content;?></p>
                <ul class="nashi-raboti-item-img-list">
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
</section>


<script>

    $('.gallery-box').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled:true
            }
        });
    });

</script>
