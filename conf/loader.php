<?php
/**
 * オートロードをするファイル
 * Date: 2017/05/21
 * @author takuya
 * @version: 1.0
 */
return [
    env('APP_NAMESPACE').'\\Apps\\Controllers' => realpath(__DIR__.'/../apps/controllers'),
    env('APP_NAMESPACE').'\\Apps\\Models' => realpath(__DIR__.'/../apps/models/'),
    env('APP_NAMESPACE').'\\Apps\\Commands' => realpath(__DIR__.'/../apps/commands'),
];