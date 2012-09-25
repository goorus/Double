<?php

namespace Double\Explorer;

/**
 *
 * Description of Explorer
 *
 * @author Goorus
 *
 */
class ExplorerDir
{

    /**
     *
     * @var array of string
     */
    protected $content;

    /**
     *
     * @var string
     */
    protected $path;

    /**
     *
     * @return array of string
     */
    public function getContent()
    {
        if (!$this->content) {
            $this->load();
        }

        return $this->content;
    }

    /**
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Загрузка контента
     */
    public function load()
    {
        $this->content = scandir($this->path);
        foreach ($this->content as &$content) {
            $content = array(
                'name' => $content,
                'isDir' => is_dir($this->path . '/' . $content)
            );
        }
    }

    /**
     *
     * @param string $path
     * @return $this|\Double\Explorer\ExplorerDir
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

}
