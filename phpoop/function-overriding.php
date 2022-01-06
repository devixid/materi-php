<?php

use Data\Application;
use MiniApp as GlobalMiniApp;

require_once "data/Application.php";

class MiniApp extends Application
{
    public function setVersion(string $version)
    {
        echo "Hello from class child";
    }
}

$mini = (new GlobalMiniApp("App, '1.1", 'linux'))
        ->setVersion('3.0.0');
