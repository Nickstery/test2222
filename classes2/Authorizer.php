<?php

interface Authorizer
{
    public function login();
    public function logout();
    public function register();
    public function test();
}