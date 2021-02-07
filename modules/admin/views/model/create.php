<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Model */

$this->title = 'Новая модель';
$this->params['breadcrumbs'][] = ['label' => 'Модели автомобилей', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'brandList' => $brandList
    ]) ?>

</div>
