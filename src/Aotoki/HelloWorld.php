<?php

namespace Aotoki;

/**
 * Class HelloWorld
 * @author Aotoki
 */

class HelloWorld
{
    private static $count = 0;
    private static $buffer = "";

    public function __construct($name = "World")
    {
        if (static::$count > 0) {
            static::$buffer .= "\n";
        }
        static::$buffer .= "Hello, $name";
        static::$count++;
    }

    public static function setHeader()
    {
        header("Content-Type: text/plain;");
    }

    public static function getCount()
    {
        return static::$count;
    }

    public static function flush()
    {
        return static::$buffer;
    }

    public static function reset()
    {
        static::$count = 0;
        static::$buffer = "";
    }
}

