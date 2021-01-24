<?php

namespace Alura\DesignPattern;

use PDO;

class PdoConnection extends PDO
{
    private static ?self $instance = null;
    
    private function __construct($dns, $username = null, $passwd = null, $options = null)
    {
        parent::__construct($dns, $username, $passwd, $options);
    }

    public static function getInstance($dns, $username = null, $passwd = null, $options = null)
    {
        if (is_null(self::$instance)) {
            self::$instance = new static($dns, $username = null, $passwd = null, $options = null);
        }
        return self::$instance;
    }
}