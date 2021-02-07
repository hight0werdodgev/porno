<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Модели автомобилей', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить эту модель? Отменить это действие невозможно!',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'brand_slug',
            'title',
            'slug',
            'meta_description:ntext',
        ],
    ]) ?>
    <?php
        if ($model->getBehavior('coverBehavior')->hasImage()) {
            echo Html::img($model->getBehavior('coverBehavior')->getUrl('medium'));
        }
    ?>

</div>
