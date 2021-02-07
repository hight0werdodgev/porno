<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pcategory */

$this->title = 'Добавление категории';
$this->params['breadcrumbs'][] = ['label' => 'Категории работ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcategory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'categoryList' => $categoryList,
    ]) ?>

</div>
