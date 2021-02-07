<div class="admin-default-index">
    <h1>Админка</h1>
</div>
<?php

use mihaildev\elfinder\ElFinder;
use yii\web\JsExpression;

echo ElFinder::widget([
    'language'         => 'ru',
    'controller'       => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
    'path' => 'image', // будет открыта папка из настроек контроллера с добавлением указанной под деритории
    'filter'           => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
    'callbackFunction' => new JsExpression('function(file, id){}'), // id - id виджета
    'frameOptions' => [
            'style' => 'width: 100%; height: 90vh; border: 0;'
        ],
]);