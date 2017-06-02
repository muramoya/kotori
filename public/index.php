<?php
/**
 * ルートファイル
 * Date: 2017/05/21
 * @author muramoya
 * @version: 1.0
 */

require_once __DIR__.'/../vendor/autoload.php';

require_once __DIR__.'/Bootstrap.php';
$boot = new Bootstrap();
$boot->dispatch();