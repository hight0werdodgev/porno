<?php
$this->title = 'Контакты в Кургане - Gasline';
$this->registerMetaTag(['name' => 'description', 'content' => 'Адрес в Кургане, карта проезда, электронная почта, номер телефона, социальные сети.']);

$sectionStart = '<section class="contacts contacts_page">';
?>

<?=\Yii::$app->view->renderFile('@app/views/site/sections/contacts.php', ['sectionStart' => $sectionStart]);?>