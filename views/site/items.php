<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Установка ГБО на ' . $brand_title . ' в Кургане';
$this->params['breadcrumbs'][] = ['url' => '/nashi-raboty', 'label' => 'Наши работы'];
$this->params['breadcrumbs'][] = $brand_title;
?>



    <section class="models">
        <div class="container">
            <h1 class="models__title"><?= $brand_title ?></h1>
            <ul class="models__list">

                <?php foreach ($items as $item): ?>
                <li class="models__item">
                    <a class="models__link" style="color: black" href="<?= Url::to(['site/item', 'alias' => $item->category_slug, 'slug' => $item->slug]); ?>">
                        <?php
                        echo $item->title;
                        if ($item->getBehavior('coverBehavior')->hasImage()) {
                            echo Html::img($item->getBehavior('coverBehavior')->getUrl('small'));
                        }
                        ?>
                    </a>
                </li>

                <?php endforeach; ?>

            </ul>
        </div>
    </section>

