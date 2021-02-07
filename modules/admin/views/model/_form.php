<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use zxbodya\yii2\imageAttachment\ImageAttachmentWidget;

/* @var $this yii\web\View */
/* @var $model app\models\Model */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'brand_slug')->dropDownList($brandList, ['class' => 'form-control', 'prompt' => 'Выбрать марку автомобиля']) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'placeholder' => 'Введите оригинальное название модели']) ?>

    <?= $form->field($model, 'meta_description')->textarea(['rows' => 4]) ?>

    <?php
        echo ImageAttachmentWidget::widget(
                [
                    'model' => $model,
                    'behaviorName' => 'coverBehavior',
                    'apiRoute' => 'model/imgAttachApi',
                ]
            )
    ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
