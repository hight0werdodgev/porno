<?php
function collectUtm()
{
    if (isset($_GET['utm_source']))
        setcookie('utm_source', $_GET['utm_source'], time() + (30 * 86400));
    if (isset($_GET['utm_medium']))
        setcookie('utm_medium', $_GET['utm_medium'], time() + (30 * 86400));
    if (isset($_GET['utm_campaign']))
        setcookie('utm_campaign', $_GET['utm_campaign'], time() + (30 * 86400));
    if (isset($_GET['utm_content']))
        setcookie('utm_content', $_GET['utm_content'], time() + (30 * 86400));
    if (isset($_GET['utm_term']))
        setcookie('utm_term', $_GET['utm_term'], time() + (30 * 86400));
}
collectUtm();

// comment out the following two lines when deployed to production
//defined('YII_DEBUG') or define('YII_DEBUG', true);
//defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
