<?php
use Kore\Config;

// define
define('ROOT_DIR', __DIR__.'/../../');
define('APP_DIR', ROOT_DIR.'app/');
define('APP_NS', 'app\\');

// Composer
require_once(ROOT_DIR.'vendor/autoload.php');

// AutoLoad
spl_autoload_register(function ($class) {

    $prefix = APP_NS;

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);

    $file = APP_DIR.str_replace('\\', '/', $relative_class).'.php';

    if (file_exists($file)) {
        require $file;
    }
});

// Regiser Config
$env = @$_SERVER['app_env'];
if (php_sapi_name() === 'cli') {
    foreach ($argv as $key => $value) {
        if (preg_match('/^--env=[a-zA-Z0-9]+$/', $value)) {
            $env = str_replace('--env=', '', $value);
            break;
        }
    }
}
Config::create($env);

// Common Settings
if (Config::get('app_debug') === true) {
    ini_set('display_errors', 1);
    error_reporting(-1);
} else {
    ini_set('display_errors', 0);
    error_reporting(0);
}
date_default_timezone_set(Config::get('timezone'));
mb_internal_encoding(Config::get('encoding'));
