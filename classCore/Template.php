<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 15. 4. 1.
 * Time: 오전 9:37
 */

class Template {
    private $args; //인자들
    private $files; //html 파일

    /**
     * @param $name
     */
    public function __get($name){
        return $this->args[$name];
    }

    /**
     * @param $file
     * @param array $args
     */
    public function __construct($file, $args = array())
    {
        $this->files = $file;
        $this->args = $args;
    }

    /**
     * rendering
     */
    public function render()
    {
        include $this->files;
    }
}