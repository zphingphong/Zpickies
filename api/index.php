<?php

require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get('m/quantity/pork', 'getQuantitySmallPageForPork');

$app->run();

function getQuantitySmallPageForPork() {
    $GLOBALS['app']->redirect('/page/small/quantity.php');
}

?>