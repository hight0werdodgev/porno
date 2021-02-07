<?php
use yii\helpers\Url;

$this->title = 'Вопрос-ответ о ГБО в Кургане - Gasline';
$this->registerMetaTag(['name' => 'description', 'content' => 'Gasline даёт ответы на вопросы, которые чаще всего беспокоят клиентов, опровергает сложившиеся стереотипы о газовом оборудовании и неправильном понимании его преимуществ.']);

$sectionStart = '<section class="questions questions_page" id="questions">';
?>

<?=\Yii::$app->view->renderFile('@app/views/site/sections/questions.php',['sectionStart' => $sectionStart]);?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/about.php');?>
<?=\Yii::$app->view->renderFile('@app/views/site/sections/contacts.php');?>