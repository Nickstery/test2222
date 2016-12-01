<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('classes/MobilePhone.php');
require_once('classes/iPhone.php');
require_once('classes2/VK.php');
require_once('classes2/Twitter.php');
require_once('classes/Math.php');



/*$iphones = [];
$broken = [];
for($i = 0; $i < 100; $i++) {
    $iphone = new iPhone(rand(5,7), rand(5,13)." Mpx", rand(1,10));
    if($iphone->makeCall()) {
        $iphones[] = $iphone;
    } else {
        $broken[] = $iphone;
    }
}*/

/*
$iphone= new iPhone('6s', '13MPX', '64 GB');

//Send by link
$iphone2 = $iphone;

//Send by value
$iphone3 = clone $iphone;

$iphone->model = 4;

echo $iphone2->model." ".$iphone->model." ".$iphone3->model;
*/

/*
$vk = new VK();
$twitter = new Twitter();

$vk->login();
$twitter->login();
*/

echo Math::$SUM;
