<?php

namespace CMS\Page;

class Assets
{
    public function __construct()
    {

    }

    /**
     * @return Assets
     */
    public static function getInstance()
    {
        return new self();
    }

    /**
     * @param string $path
     * @return string
     */
    public function addJs(string $path) {
        $html = '<script src="'. $path. '"></script>';
        return $html;
    }

    /**
     * @param string $path
     * @return string
     */
    public function addCss(string $path) {
        $html = '<link rel="stylesheet" type="text/css" href="'. $path. '">';
        return $html;
    }
}