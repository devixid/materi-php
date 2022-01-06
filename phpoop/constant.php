<?php 

class App 
{
    public $appName, $appVersion, $appOs = 'Linux';

    public const APP_AUTHOR = 'Noval Ramdhani';

    public function getInfoApp()
    {
        return [
            'app_name' => $this->appName,
            'app_version' => $this->appVersion,
            'app_os' => $this->appOs,
        ];
    }
}

$app = new App;
$app->appName = "Belajar PHP OOP";
$app->appVersion = '1.0.1';
$app->appOs;
var_dump($app->getInfoApp());