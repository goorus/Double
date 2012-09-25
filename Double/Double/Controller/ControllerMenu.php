<?php

namespace Double\Controller;

/**
 *
 * Командная строка
 *
 * @author Goorus
 *
 */
class ControllerMenu
{

    public function execute()
    {

        return array(
            'template' => __DIR__ . '/../../Resource/Php/Controller/Menu.php'
        );
    }

}
