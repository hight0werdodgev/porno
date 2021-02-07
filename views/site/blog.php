<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Блог о ГБО в Кургане - Gasline';
$this->params['breadcrumbs'][] = 'Блог';
$this->registerMetaTag(['name' => 'description', 'content' => 'Мифы о ГБО, отзывы клиентов, полезные статьи и многое другое от Gasline г.Курган в нашем блоге.']);
?>
<!--    <div class="site-about">-->
<!--    </div>-->

    <section class="blog">
<!--        <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
        <div class="container">
        <h1 class="blog__title">Статьи о ГБО </h1>
            <?php foreach ($articles as $article): ?>
            <div class="blog__item-wrap">
                <div class="blog__item-img-wrap">
<!--                    <img src="" alt="" class="blog__item-img">-->
                    <a href="<?= Url::to(['site/article', 'slug' => $article->slug]); ?>">
                        <?php
                            if ($article->getBehavior('coverBehavior')->hasImage()) {
                                echo Html::img($article->getBehavior('coverBehavior')->getUrl('medium'), ['alt' =>
                                    $article->title]);
                            }
                        ?>
                    </a>
                </div>

                <div class="blog__item-description">
                    <h2 class="blog__item-title">
                        <a href="<?= Url::to(['site/article', 'slug' => $article->slug]); ?>">
                            <?= $article->title; ?>
                        </a>
                    </h2>

                     <p><?= $article->description; ?></p>

                    <a class="blog__link" href="<?= Url::to(['site/article', 'slug' => $article->slug]); ?>"><button type="button" class="btn"> Подробнее</button></a>
                </div>
            </div>

            <?php endforeach; ?>
        </div>
    </section>

<?=\Yii::$app->view->renderFile('@app/views/site/sections/contacts.php');?>
