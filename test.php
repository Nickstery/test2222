<?php

class A
{
    public $a;

    public function __construct()
    {

    }

    protected function setA() {
        $this->a = 5;
    }
}

class B extends A
{

    public static $field = 5;

    public function test() {
        self::$field;
        $this->setA();
    }

    public function __clone()
    {
        self::test3();
        die("TEST");
    }

    public function __destruct()
    {
        die('DESTRUCT');
    }

    public static function test2() {
        //Inside static you can call only static field for methods
        self::$field;
        self::test3();
    }

    public static function test3() {

    }

}


B::test2();

$b1 = new B();
$b1 = null;