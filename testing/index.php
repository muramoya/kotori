<?php
/**
 * ルートファイル
 * Date: 2017/05/21
 * @author muramoya
 * @version: 1.0
 */

require_once __DIR__ . '/../vendor/autoload.php';
use KTRLib\UnitTest;
define('APP_BASE_PATH', realpath(__DIR__ . '/../'));

$boot = new UnitTest();
$boot->run();