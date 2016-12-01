<?php

class TEST2 extends ABS implements Authorizer, Test
{

    public function login()
    {
        // TODO: Implement login() method.
    }

    public function logout()
    {
        // TODO: Implement logout() method.
    }

    public function register()
    {
        // TODO: Implement register() method.
    }

}

abstract class ABS
{
    public $a;
    public function test() {
        echo "I AM TEST";
    }

}

interface Test
{
    public function test();
}

interface Authorizer
{
    public function login();
    public function logout();
    public function register();
    public function test();
}