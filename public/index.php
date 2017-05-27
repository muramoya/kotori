<?php
/**
 * ルートファイル
 * Date: 2017/05/21
 * @author takuya
 * @version: 1.0
 */

require_once __DIR__.'/../vendor/autoload.php';
//helper
require_once __DIR__.'/../core/helper.php';

use Phalcon\Loader;
use KTR\Config;
use KTR\Bootstrap;
use Dotenv\Dotenv;
use Phalcon\Di\FactoryDefault;

/*
 * dotenv
 ************************/
$dotEnv = new Dotenv(__DIR__.'/../');
$dotEnv->load();

/*
 * autoload
 ************************/
$loadConf = Config::factory('loader.php');

if(!empty($loadConf))
{
    $loader = new Loader();
    $loader->registerNamespaces($loadConf->toArray())->register();
}

/*
 * services
 ************************/
$di = new FactoryDefault();
$serviceConf = Config::factory('services.php');
if($serviceConf->count() > 0) {
    foreach ($serviceConf as $name => $class) {
        $di->set($name, $class);
    }
}

//クロージャでの登録
require_once __DIR__.'/../conf/services_from_closure.php';

$boot = new Bootstrap($di);
$boot->dispatch();