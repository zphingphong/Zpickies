<?php

require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get('/m/quantity/:product', 'getQuantitySmallPage');

$app->run();

function getQuantitySmallPage($product) {
//    $GLOBALS['app']->redirect('/page/small/quantity.php?product=' + $product);
}
