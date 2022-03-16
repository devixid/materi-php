<?php 

class Application 
{
    public $appName, $appVersion, $appOs = 'Linux';
}

$app = new Application;
$app->appName = "Belajar PHP OOP";
$app->appVersion = '1.0.1';
$app->appOs;