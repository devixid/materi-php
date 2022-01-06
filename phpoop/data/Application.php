<?php 

namespace Data;

class Application
{
    private string $appName, $appVersion, $appOs;

    protected string $appTag = '1.0rc';

    public const APP_AUTHOR = 'Noval Ramdhani';

    // __construct adalah sebuah magic method bawaan langsung dari php dan semua magic function di php diawai dengan prefix __
    public function __construct(string $appName, string $appVersion, string $appOs = 'Linux')
    {
        $this->appName = $appName;
        $this->appVersion = $appVersion;
        $this->appOs = $appOs;
    }

    public function setVersion(string $version)
    {
        $this->appVersion = $version;
        return $this;
    }

    public function getInfoApp()
    {
        return [
            'app_class' => get_class($this),
            'app_name' => $this->appName,
            'app_version' => $this->appVersion,
            'app_os' => $this->appOs,
            'app_author' => self::APP_AUTHOR // mengakses constanta menggunakan self keyword
        ];
    }

    // Method ini akan dijalankan jika sebuah program mengakhiri baris kodenya
    public function __destruct()
    {
        echo "Program Finished";

        exit(1);
    }
}