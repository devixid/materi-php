<?php

use Data\Application;
use Data\HasApplicationDebug;
use Data\HasApplicationInfo;
use MiniApp as GlobalMiniApp;

require_once "data/Application.php";

class MiniApp extends Application
{
    use HasApplicationInfo, HasApplicationDebug {
        HasApplicationInfo::getDebug insteadOf HasApplicationDebug;
        HasApplicationDebug::getDebug as getDebugs;
    }

    public function __construct(string $appName, string $appVersion, string $appOs = 'Linux')
    {
        parent::__construct($appName, $appVersion, $appOs);    
    }

    public function getServers()
    {
        return $_SERVER;
    }

    public function isDevelopment(): bool
    {
        return $this->env[0] == 'development';
    }

    public function isTesting(): bool
    {
        return $this->env[1] == 'testing';
    }

    public function isProduction(): bool
    {
        return $this->env[2] == 'production';
    }

    public function __debugInfo()
    {
        return [
            'app_class' => get_class($this),
            'app_name' => $this->appName,
            'app_version' => $this->appVersion,
            'app_os' => $this->appOs,
            'app_author' => self::APP_AUTHOR,  // mengakses constanta menggunakan self keyword
            'app_maintenance' => $this->isMaintenance(),
            'app_servers' => $this->getServers()
        ];
    }
}

$app = (new GlobalMiniApp("Belajar OOP PHP", '1.0.1'))
        ->setAppName('Belajar PHP OOP')
        ->setMaintenance(true);
var_dump((object) $app);