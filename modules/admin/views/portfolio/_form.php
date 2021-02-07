<?php

use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use zxbodya\yii2\galleryManager\GalleryManager;
use zxbodya\yii2\imageAttachment\ImageAttachmentWidget;

/* @var $this yii\web\View */
/* @var $model app\models\Portfolio */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
    .guide {
        background-color: #eae2e2;
    }
    .guide__description {
        height: 0;
        opacity: 0;
        display: none;
    }
    .guide__title.open + .guide__description{
        height: auto;
        opacity: 1;
        display: block;
    }
    .guide__title.open:before{
        content: '-';
    }
    .guide__title{
        position: relative;
        cursor: pointer;
    }
    .guide__title:before {
         position: absolute;
         top: 0;
         left: -20px;
         content: '+';
         color: #0b3e6f;
         width: 20px;
         height: 20px;
    }


</style>


<div class="portfolio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($portfolio, 'brand_slug')->dropDownList($brandList, ['class' => 'form-control', 'prompt' => 'Выбрать марку автомобиля']) ?>

    <?= $form->field($portfolio, 'model_slug')->dropDownList($modelList, ['class' => 'form-control', 'prompt' => 'Выбрать модель автомобиля']) ?>

    <?= $form->field($portfolio, 'category_slug')->dropDownList($categoryList, ['class' => 'form-control', 'prompt' => 'Выбрать категорию работы']) ?>

    <?= $form->field($portfolio, 'title')->textInput(['maxlength' => true]) ?>

    <p class="alert-info">Заголовок должен иметь вид: <b>Установка ГБО на Nissan Cefiro</b></p>

    <?= $form->field($portfolio, 'content')->widget(CKEditor::className(), ['editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),])?>

    <div class="guide" id="guide">
        <h4 class="guide__title" id="guide__title">Инструкция по добавлению галереи</h4>

        <div class="guide__description" id="guide__description">
            <span class="alert-success"">1) После заполнения текстового содержания работы, нажмите красную кнопку
            вставки параграфа в правом углу.</span>
            <img style="margin-bottom: 15px" src="/dist/img/jpg/slide01.png" alt="">
            <span class="alert-success">2) Нажмите кнопку "Добавить Div-контейнер" на панели инструментов и в появившемся окне заполните класс значением <b>gallery-box</b> и нажмите ОК</span>
            <img style="margin-bottom: 15px" src="/dist/img/jpg/slide02.png" alt="">
            <span class="alert-success">3) Нажмите кнопку "Источник" на панели инструментов, удалите параграф внутри созданного div-блока <b>&lt;p&gt;nbsp;&lt;/p&gt; и вернитесь в режим визуального редактирования, нажав кнопку "Источник"</b></span>
            <img style="margin-bottom: 15px" src="/dist/img/jpg/slide03.png" alt="">
            <span class="alert-success">4) Нажмите кнопку "Изображение" на панели инструментов, выберите нужно на сервере, скопируйте ссылку в буфер обмена, перейдите во вкладку "Ссылка" и вставьте ссылку из буфера обмена. Далее перейдите во вкладку "Дополнительно" и заполните поле класс CSS значением <b>gallery-item</b>, после чего нажмите OK</span>
            <img style="margin-bottom: 15px" src="/dist/img/jpg/slide04.png" alt="">
            <span class="alert-success">5) Повторите 4-ый пункт для добавления всех изображений. Html-верстка должна иметь такой вид:</span>
            <img style="margin-bottom: 15px" src="/dist/img/jpg/slide07.png" alt="">
        </div>

<!--        <hr style="background-color: #0a73bb; height: 1px;">-->

        <script>
            window.onload = function () {
                accordeonGuide();
            }
            //
            function accordeonGuide() {
                var title = document.getElementById("guide__title");
                var guideDescription = document.getElementById("guide__description");
                title.addEventListener("click", function () {
                    if(title.classList.contains('open') ) {
                        title.classList.remove("open");
                    }
                    else{
                        this.classList.add("open");
                    };

                    // guideDescription.classList.add("open");

                })


                };
                // let section = document.getElementById('guide');
                // section.addEventListener("click", function(e) {
                //     if (e.target !== section) {
                //         guideTitle.classList.remove("open");
                //     };
                // });

        </script>
    </div>

    <?= $form->field($portfolio, 'meta_description')->textarea(['rows' => 4]) ?>

    <?php
    echo ImageAttachmentWidget::widget(
        [
            'model' => $portfolio,
            'behaviorName' => 'coverBehavior',
            'apiRoute' => 'portfolio/imgAttachApi',
        ]
    )
    ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>