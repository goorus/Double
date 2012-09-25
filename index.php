<?php

/**
 * Запускающий файл Web-приложения
 */

if (empty($_GET['controller'])) {
    $_GET['controller'] = 'Double\\Controller\\ControllerIndex';
}

$pathes = array(
    __DIR__ . '/../../ruon.local/www/'
);
$ruonPath = null;

foreach ($pathes as $path) {
    if (is_dir($path)) {
        $ruonPath = $path;
        break;
    }
}

require $ruonPath . '/Core.php';

$bootstrap = Ruon\Core::init(__DIR__ . '/Double/Double/DoubleBootstrap.php');

$bootstrap->getApplication()
    ->setFrontController('Ruon\\Controller\\Front\\ControllerFrontWeb')
    ->run();