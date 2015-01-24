<?php

return [
    '/' => [
        'name' => 'index',
        'callback' => '\Modules\Doc\Controllers\DocController:index'
    ],
    '/{url:.*}' => [
        'name' => 'view',
        'callback' => '\Modules\Doc\Controllers\DocController:view'
    ],
];
