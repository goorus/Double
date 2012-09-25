<?php

namespace Double\Controller;

/**
 * Description of ControllerIndex
 *
 * @author Goorus
 */
class ControllerIndex
{

    public function execute()
    {
        return array(
            'template' => __DIR__ . '/../../Resource/Php/Controller/Index.php'
        );
    }

}
