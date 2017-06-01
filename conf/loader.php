<?php
/**
 * オートロードをするファイル
 * Date: 2017/05/21
 * @author muramoya
 * @version: 1.0
 */
return [
    env('APP_NAMESPACE').'\\Apps\\Controllers' => realpath(__DIR__.'/../apps/controllers'),
    env('APP_NAMESPACE').'\\Apps\\Models' => realpath(__DIR__.'/../apps/models/'),
    env('APP_NAMESPACE').'\\Apps\\Commands' => realpath(__DIR__.'/../apps/commands'),
    env('APP_NAMESPACE').'\\UnitTest'=> realpath(__DIR__.'/../testing'),
];