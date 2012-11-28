<?php

/**
 * Запускающий файл Web-приложения
 */

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

require $ruonPath . '/Ruon/Core.php';
Ruon\Core::initApp(__DIR__ . '/Double', 'Double')->run();