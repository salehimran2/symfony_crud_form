<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\TodoController::index'], null, null, null, false, false, null]],
        '/all' => [[['_route' => 'all', '_controller' => 'App\\Controller\\TodoController::all'], null, null, null, false, false, null]],
        '/create' => [[['_route' => 'create-task', '_controller' => 'App\\Controller\\TodoController::create'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/updateStatus/([^/]++)(*:29)'
                .'|/deleteTask/([^/]++)(*:56)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:91)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'update-status', '_controller' => 'App\\Controller\\TodoController::updateTaskStatus'], ['id'], null, null, false, true, null]],
        56 => [[['_route' => 'delete-task', '_controller' => 'App\\Controller\\TodoController::delete'], ['id'], null, null, false, true, null]],
        91 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
