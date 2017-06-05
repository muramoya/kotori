<?php
/**
 * ルートファイル
 * Date: 2017/05/21
 * @author muramoya
 * @version: 1.0
 */

require_once __DIR__.'/../vendor/autoload.php';

require_once __DIR__.'/Bootstrap.php';
try
{
    define('APP_BASE_PATH', __DIR__ . '/../');
    $boot = new Bootstrap();
    $boot->dispatch();
}
catch (Error | Exception $e)
{
    (new \KTRLib\Logger())->write([$e->getMessage(), $e->getTraceAsString()], \KTRLib\Logger::ERROR);
}