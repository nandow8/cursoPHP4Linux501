<?php

class Calc{

    public static $a;
    public static $b;

    public static function soma(){
        return self::$a + self::$b;
    }

    public static function subt(){
        return self::$a - self::$b;
    }

    public static function div(){
        return self::$a / self::$b;
    }

    public static function mult(){
        return self::$a * self::$b;
    }

}

Calc::$a = 4;
Calc::$b = 4;

echo Calc::soma();