<?php

/* @var $this yii\web\View */

use app\components\CategoryWidget;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Наши работы в Кургане - Gasline';
$this->params['breadcrumbs'][] = 'Наши работы';
$this->registerMetaTag(['name' => 'description', 'content' => 'Фотоотчеты выполненных работ в Кургане по установке, опрессовке, обслуживанию газобаллонного оборудования.']);
?>
<style>
    a{
        color: black;
    }
</style>


<section class="brand">
    <div class="container">
        <h1 class="brand__title">Наши работы в Кургане</h1>


            <?php foreach ($tree as $item): ?>

                <h2><?=$item['title']?></h2> <!-- Заголовок категории работ!-->
                <ul class="brand__list">

                <?php $arr = $item['children'] ;?>

                <?php foreach ($arr as $it): ?>

                    <?php if ($arr): ?>
                        <?php $items = \app\models\Portfolio::find()->where(['category_slug' => $it['slug']])->asArray()->all();?>
                        <li class="brand__item">
                        <a class="brand__item-link" href="<?= Url::to(['site/items', 'slug' => $it['slug']]); ?>"> <!-- Ссылка на марку авто!-->
                            <?= $it['title']; ?>
                        </a>
                    <?endif;?>
                            <div class="counter">(<?= count($items); ?>)</div>
                    </li>
                <?php endforeach;?>
                </ul>

            <?php endforeach;?> <!--КОНЕЦ ОСНОВНОГО ЦИКЛА-->

    </div>
</section>

