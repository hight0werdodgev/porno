<?php

use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use zxbodya\yii2\imageAttachment\ImageAttachmentWidget;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 4]) ?>

    <p class="alert-info">Краткое описание статьи для отображения в блоке на странице "Главная / Блог "</p>

    <hr style="background-color: #0a73bb; height: 1px;">

    <?= $form->field($model, 'content')->widget(CKEditor::className(), ['editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),])?>

    <?= $form->field($model, 'meta_description')->textarea(['rows' => 4]) ?>

    <p class="alert-info">Описание будет отображено на странице странице статьи в блоге, например "Главная / Блог / Мифы о ГБО"</p>

    <hr style="background-color: #0a73bb; height: 1px;">

    <?= $form->field($model, 'alt_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_image')->textInput(['maxlength' => true]) ?>

    <?php
        echo ImageAttachmentWidget::widget(
            [
                'model' => $model,
                'behaviorName' => 'coverBehavior',
                'apiRoute' => 'article/imgAttachApi',
            ]
        )
    ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
