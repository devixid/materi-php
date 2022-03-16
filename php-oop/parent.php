<?php

use Data\Application;

require_once "data/Application.php";

class MiniApp extends Application
{
    public function __construct(string $appName, string $appVersion, string $appOs = 'Linux')
    {
        parent::__construct($appName, $appVersion, $appOs);
    }
    
    public function setVersion(string $version)
    {
        parent::setVersion($version);
    }

    public function getInfoApp()
    {
        parent::getInfoApp();
    }
}

$mini = (new MiniApp("App, '1.1", 'linux'))
        ->setVersion('3.0.0');

var_dump($mini->getInfoApp());