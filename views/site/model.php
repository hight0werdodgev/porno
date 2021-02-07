<?php
//шаблон не используется

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $brand_title;
$this->params['breadcrumbs'][] = $this->title;
?>


<!--вёрстка пока не используются-->
<section class="test">
    <h1 class="test__title"><?= Html::encode($this->title) ?></h1>
    <ul class="test__list">

        <?php foreach ($models as $model): ?>

            <li>
                <a class="" ref="<?= Url::toRoute(['site/portfolio', 'id' => $model->id]); ?>">
                    <?php
                        echo $model->title;
                        if ($model->getBehavior('coverBehavior')->hasImage()) {
                        echo Html::img($model->getBehavior('coverBehavior')->getUrl('small'));
                        }
                    ?>
                </a>
            </li>

        <?php endforeach; ?>

    </ul>
</section>
