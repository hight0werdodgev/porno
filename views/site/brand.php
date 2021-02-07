<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Наши работы в Кургане - Gasline';
$this->params['breadcrumbs'][] = 'Наши работы';
$this->registerMetaTag(['name' => 'description', 'content' => 'Фотоотчеты выполненных работ в Кургане по установке, опрессовке, обслуживанию газобаллонного оборудования.']);
?>


<section class="brand">
    <div class="container">
        <h1 class="brand__title">Наши работы в Кургане</h1>

        <ul class="brand__list">

        <?php foreach ($brands as $brand): ?>

            <li class="brand__item">
                <a class="brand__item-link" href="<?= Url::to(['site/items', 'slug' => $brand->slug]); ?>">
               <?= $brand->title; ?> <div class="counter">(<?= $brand->getPortfolio()->count(); ?>)<div>
                </a>
            </li>

        <?php endforeach; ?>

        </ul>
    </div>
</section>

<?=\Yii::$app->view->renderFile('@app/views/site/sections/contacts.php');?>