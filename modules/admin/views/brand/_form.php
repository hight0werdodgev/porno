<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Brand */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="brand-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'placeholder' => 'Введите оригинальное название марки автомобиля']) ?>

    <?= $form->field($model, 'meta_description')->textarea(['rows' => 4]) ?>

    <p class="alert-info">Ключевые слова и описание будут отображены на странице списка портфолио одного бренда, например "Главная / Наши работы / Toyota"</p>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
