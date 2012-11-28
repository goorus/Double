<?php

/**
 * Запускающий файл Web-приложения
 */

$pathes = array(
    __DIR__ . '/../../ruon.local/www/'
);

foreach ($pathes as $path) {
    if (is_dir($path)) {
        require $path . '/Ruon/Core.php';
        break;
    }
}

Ruon\Core::initApp(__DIR__ . '/Double', 'Double')->run();