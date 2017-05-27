<?php
/**
 * クロージャ経由でのサービス登録
 * Date: 2017/05/21
 * @author takuya
 * @version: 1.0
 */

use KTR\Database\DbAdopter;

//$di変数はPhalcon\\Di\\FactoryDefaultのインスタンス。
//index.phpでnew済みのため

$di->set('db', function() {
   return DbAdopter::factory();
});