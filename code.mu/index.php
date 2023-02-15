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
