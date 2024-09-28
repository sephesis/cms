<?php

namespace CMS;

class Config
{
    protected $config = [];

    public function __construct()
    {
        $this->config = require __DIR__ . '/../config.php';
    }

    public static function getInstance()
    {
        return new self();
    }

    /**
     * @param string $key
     * @return mixed
     */
    public function get(string $key)
    {
        $keys = explode('.', $key);
        $currentValue = $this->config;
    
        foreach ($keys as $key) {
            if (isset($currentValue[$key])) {
                $currentValue = $currentValue[$key];
            } else {
                return null;
            }
        }
    
        return $currentValue;
    }
}
