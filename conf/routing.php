<?php
/**
 * routing configration
 * Date: 2016/06/22
 * @author muramoya
 * @version: 1.0
 */

return [
    '/sample' => [
        'controller' => 'sample',
        'actions' => [
            ['action' => 'show', 'url' => '/{id}', 'method' => ['GET']],
            ['action' => 'create', 'method' => ['POST']],
        ]
    ]
];