<?php
/**
 * クロージャ経由でのサービス登録
 * Date: 2017/05/21
 * @author muramoya
 * @version: 1.0
 */

use KTRLib\Database\DbAdopter;

//$di変数はPhalcon\\Di\\FactoryDefaultのインスタンス。
//index.phpでnew済みのため

$di->set('db', function() {
   return DbAdopter::factory();
});

$di->set('env', function() {
    return new Dotenv\Dotenv(__DIR__ . '/../');
});