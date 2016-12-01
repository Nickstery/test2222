<?php
require_once('Authorizer.php');
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 12/1/16
 * Time: 22:55
 */
class VK implements Authorizer
{
    public function login()
    {
        echo 'LOGIN WITH VKONTAKTE';
    }

    public function logout()
    {
        // TODO: Implement logout() method.
    }

    public function register()
    {
        // TODO: Implement register() method.
    }

    public function test()
    {
        // TODO: Implement test() method.
    }
}