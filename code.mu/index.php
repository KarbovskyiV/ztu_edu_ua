<?php

declare(strict_types=1);

require_once 'core/Controller.php';
require_once 'project/Controller.php';
require_once 'modules/marketCart.php';
require_once 'modules/shopCart.php';

$coreController = new \core\Controller();
$projectController = new \project\Controller();

$marketCart = new \Market\Cart\Cart();
$shopCart = new \Shop\Cart\Cart();

spl_autoload_register();
$obj1 = new Core\User;
$obj2 = new Core\Admin\Controller;
$obj3 = new Project\User\Data;

var_dump($obj1);
var_dump($obj2);
var_dump($obj3);
