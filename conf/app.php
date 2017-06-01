<?php
/**
 * アプリケーション設定
 * Date: 2017/05/27
 * @author muramoya
 * @version: 1.0
 */

return [
    'appNameSpace' => env('APP_NAMESPACE', 'MyApp'),
    'appLogPath' => __DIR__ . '/../storage/logs',
    'defaultAppLogFileName' => date('Y-m-d') . '.log',
    'appLangPath' => __DIR__ . '/../lang',
    'locale' => 'jp',
];