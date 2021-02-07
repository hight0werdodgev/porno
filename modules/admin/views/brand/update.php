<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Brand */

$this->title = 'Редактирование марки автомобиля: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Марки автомобилей', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="brand-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
