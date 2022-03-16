<?php 

namespace Data;

interface ApplicationEnv 
{
    public function isDevelopment(): bool;

    public function isTesting(): bool;

    public function isProduction(): bool;
}

interface ApplicationContract extends ApplicationEnv
{
    public function __debugInfo();
}

trait HasApplicationInfo
{
    public function getDebug(): bool
    {
        return false;
    }

    public function getClass(object $object): string
    {
        return get_class($object);
    }

    public function getClassMethods(mixed $class): array
    {
        return get_class_methods($class);
    }
}

trait HasApplicationDebug 
{
    use HasApplicationInfo;

    public function getDebug(): bool
    {
        return true;
    }
}

abstract class Application implements ApplicationContract
{
    private string $appName, $appVersion, $appOs, $isMaintenance;

    protected array $env = [
        'development',
        'testing',
        'local'
    ];

    protected string $appTag = '1.0rc';

    public const APP_AUTHOR = 'Noval Ramdhani';

    // __construct adalah sebuah magic method bawaan langsung dari php dan semua magic function di php diawai dengan prefix __
    public function __construct(string $appName, string $appVersion, string $appOs = 'Linux')
    {
        $this->appName = $appName;
        $this->appVersion = $appVersion;
        $this->appOs = $appOs;
    }

    abstract public function getServers();

    public function getInfoApp()
    {
        return [
            'app_class' => get_class($this),
            'app_name' => $this->appName,
            'app_version' => $this->appVersion,
            'app_os' => $this->appOs,
            'app_author' => self::APP_AUTHOR,  // mengakses constanta menggunakan self keyword
            'app_maintenance' => $this->isMaintenance()
        ];
    }

    public function getAppName(): string
    {
        return $this->appName;
    }

    public function setAppName(string $value)
    {
        $this->appName = $value;
        return $this;
    }

    public function isMaintenance(): bool
    {
        return $this->isMaintenance;
    }

    public function setMaintenance(bool $value)
    {
        $this->isMaintenance = $value;
        return $this;
    }

    // Method ini akan dijalankan jika sebuah program mengakhiri baris kodenya
    public function __destruct()
    {
        echo "Program Finished";

        exit(1);
    }
}