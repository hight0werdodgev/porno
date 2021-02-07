<?php

use yii\helpers\Url;

$this->title = $item->title . ' в Кургане';;
$this->params['breadcrumbs'][] = ['url' => '/nashi-raboty', 'label' => 'Наши работы'];
$this->params['breadcrumbs'][] = ['url' => "/nashi-raboty/$brand->slug", 'label' => $brand->title];
$this->params['breadcrumbs'][] = $item->title;
?>


<section class="nashi-raboti-item">
    <div class="container">
        <h1 class="nashi-raboti-item-main-title"><?= $item->title?></h1>
            <div class="nashi-raboti-item-wrap">
                <p class="nashi-raboti-item__p"><?= $item->content;?></p>
                <a href="<?= Url::to(['site/page', 'view'  => 'calculator'])?>"><button class="btn">Рассчитать цену установки</button></a>
            </div>
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
