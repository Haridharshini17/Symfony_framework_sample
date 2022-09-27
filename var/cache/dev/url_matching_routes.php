<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/create/employee' => [[['_route' => 'add_employee', '_controller' => 'App\\Controller\\EmployeeController::create'], null, null, null, false, false, null]],
        '/example' => [[['_route' => 'app_example', '_controller' => 'App\\Controller\\ExampleController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'hello', '_controller' => 'App\\Controller\\MessageController::greetings'], null, null, null, false, false, null]],
        '/nextpage' => [[['_route' => 'nextpage', '_controller' => 'App\\Controller\\MessageController::nextpage'], null, null, null, false, false, null]],
        '/twigexample' => [[['_route' => 'twigpage', '_controller' => 'App\\Controller\\MessageController::twigexample'], null, null, null, false, false, null]],
        '/table/example' => [[['_route' => 'app_table_example', '_controller' => 'App\\Controller\\TableExampleController::createRecord'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/show/employee/([^/]++)(*:65)'
                .'|/update/employee/([^/]++)(*:97)'
                .'|/merge/employee/([^/]++)(*:128)'
                .'|/nextpage(?'
                    .'|(?:/(\\d+))?(*:159)'
                    .'|/([^/]++)(*:176)'
                .')'
                .'|/record/([^/]++)(*:201)'
                .'|/products/([^/]++)(*:227)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        65 => [[['_route' => 'show_employee', '_controller' => 'App\\Controller\\EmployeeController::show'], ['id'], null, null, false, true, null]],
        97 => [[['_route' => 'update_employee', '_controller' => 'App\\Controller\\EmployeeController::update'], ['id'], null, null, false, true, null]],
        128 => [[['_route' => 'delete_employee', '_controller' => 'App\\Controller\\EmployeeController::merge'], ['id'], null, null, false, true, null]],
        159 => [[['_route' => 'examplepage', 'slug' => 1, '_controller' => 'App\\Controller\\MessageController::slugExample'], ['slug'], null, null, false, true, null]],
        176 => [[['_route' => 'requirementpage', '_controller' => 'App\\Controller\\MessageController::requirement'], ['slug'], null, null, false, true, null]],
        201 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\TableExampleController::show'], ['id'], null, null, false, true, null]],
        227 => [
            [['_route' => 'product_shows', '_controller' => 'App\\Controller\\TableExampleController::shows'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
