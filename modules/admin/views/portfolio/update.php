<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Portfolio */

$this->title = 'Редактирование работы: ' . $portfolio->title;
$this->params['breadcrumbs'][] = ['label' => 'Наши работы', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="portfolio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'portfolio' => $portfolio,
        'brandList' => $brandList,
        'modelList' => $modelList,
        'categoryList' => $categoryList,
    ]) ?>

</div>
