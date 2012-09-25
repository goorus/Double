<?php

namespace Double\Controller;

/**
 *
 * Файловая панель
 *
 * @author Goorus
 *
 */
class ControllerPanel
{

    public function execute($name, $path)
    {
        if (!$path) {
            $path = __DIR__;
        }
        $path = realpath($path);

        setcookie('panel_path_' . $name, $path);

        $explorer = new \Double\Explorer\ExplorerDir();
        $explorer->setPath($path);

        return array(
            'name' => $name,
            'path' => $path,
            'explorer' => $explorer,
            'template' => __DIR__ . '/../../Resource/Php/Controller/Panel.php'
        );
    }

}
