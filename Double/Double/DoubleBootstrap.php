<?php

namespace Double;

/**
 *
 * Description of DoubleBootstrap
 *
 * @author Goorus
 *
 */
class DoubleBootstrap extends \Ruon\BootstrapAbstract
{

    /**
     *
     * @return \Ruon\Loader\LoaderAbstract
     */
    public function getLoader()
    {
        if (!$this->loader) {
            $loader = parent::getLoader();
            $loader->setPath(__NAMESPACE__, __DIR__);
        }

        return $this->loader;
    }

}
