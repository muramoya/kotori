<?php
/**
 * routing configration
 * Date: 2016/06/22
 * @author muramoya
 * @version: 1.0
 */

return [
    '/sample' => [
        'controller' => 'SampleController',
        'GET' => [
            ['action' => 'show', 'url' => '/{id}'],
        ],
        'POST' => [
            ['action' => 'create'],
        ],
    ]
];