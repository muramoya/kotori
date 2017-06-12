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
    $msg = $e->getMessage() . PHP_EOL . '[Stack Trace]' . PHP_EOL . $e->getTraceAsString();
    (new \KTRLib\Logger())->error($msg);
    $response = new Phalcon\Http\Response();
    if (\KTRLib\Config::factory('app.php')->isDebug) $response->setJsonContent(['message' => $e->getMessage(), 'stack_trace' => explode("\n", $e->getTraceAsString())]);
    $response->setStatusCode(500)->sendHeaders();
    $response->send();
}