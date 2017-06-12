<?php
/**
 * クロージャ経由でのサービス登録
 * Date: 2017/05/21
 * @author muramoya
 * @version: 1.0
 */

use KTRLib\Database\DbAdopter;
use KTRLib\Router;
//$di変数はPhalcon\\Di\\FactoryDefaultのインスタンス。
//index.phpでnew済みのため

$di->set('db', function() {
   return DbAdopter::factory();
});

$di->set('env', function() {
    if(file_exists(__DIR__ . '/../.env'))
    {
        $env = new Dotenv\Dotenv(__DIR__ . '/../');
        $env->load();
    }
});

$di->set('router', function () {
    $router = new Router();
    return $router->routing();
});