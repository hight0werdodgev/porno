<?php

use yii\helpers\Html;

$this->title = $article->title . ' в Кургане';
$this->params['breadcrumbs'][] = ['label'=> 'Блог', 'url'=>['/site/blog/']];
$this->params['breadcrumbs'][] = $article->title;

?>

<section class="article">
    <div class="container">

        <h1 class="article__title"><?= $article->title; ?></h1>
        <div class="article__item-img-wrap">
            <?php
            if ($article->getBehavior('coverBehavior')->hasImage()) {
                echo Html::img($article->getBehavior('coverBehavior')->getUrl('medium'), ['alt' => $article->alt_image, 'title' => $article->title_image]);
            }
            ?>
        </div>

        <p><?= $article->content; ?></p>

<!--<div class="panel-heading"><b>Галерея</b></div>-->

        <?php //foreach ($article->getBehavior('galleryBehavior')->getImages() as $image) { echo Html::img($image->getUrl('medium')); }?>
    </div>
</section>