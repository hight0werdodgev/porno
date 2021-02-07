<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Страница не найдена - Gasline';

$h1 = '<h1 class="services__title">Страница не найдена 404</h1>';
$h2 = '<h2 class="services__title" style="font-size: 40px">Вы можете выбрать интересующую Вас услугу:</h2>';
?>

<?=\Yii::$app->view->renderFile('@app/views/site/sections/services.php', ['h1' => $h1, 'h2' => $h2]);?>