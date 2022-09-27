<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/employee/create' => [[['_route' => 'add_employee', '_controller' => 'App\\Controller\\EmployeeController::create'], null, null, null, false, false, null]],
        '/employee/show' => [[['_route' => 'show_allemployee', '_controller' => 'App\\Controller\\EmployeeController::showAll'], null, null, null, false, false, null]],
        '/example' => [[['_route' => 'app_example', '_controller' => 'App\\Controller\\ExampleController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'hello', '_controller' => 'App\\Controller\\MessageController::greetings'], null, null, null, false, false, null]],
        '/nextpage' => [[['_route' => 'nextpage', '_controller' => 'App\\Controller\\MessageController::nextpage'], null, null, null, false, false, null]],
        '/twigexample' => [[['_route' => 'twigpage', '_controller' => 'App\\Controller\\MessageController::twigexample'], null, null, null, false, false, null]],
        '/table/example' => [[['_route' => 'app_table_example', '_controller' => 'App\\Controller\\TableExampleController::createRecord'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/employee/(?'
                    .'|show/([^/]++)(*:68)'
                    .'|update/([^/]++)(*:90)'
                    .'|merge/([^/]++)(*:111)'
                .')'
                .'|/nextpage(?'
                    .'|(?:/(\\d+))?(*:143)'
                    .'|/([^/]++)(*:160)'
                .')'
                .'|/record/([^/]++)(*:185)'
                .'|/products/([^/]++)(*:211)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        68 => [[['_route' => 'show_employee', '_controller' => 'App\\Controller\\EmployeeController::show'], ['id'], null, null, false, true, null]],
        90 => [[['_route' => 'update_employee', '_controller' => 'App\\Controller\\EmployeeController::update'], ['id'], null, null, false, true, null]],
        111 => [[['_route' => 'delete_employee', '_controller' => 'App\\Controller\\EmployeeController::merge'], ['id'], null, null, false, true, null]],
        143 => [[['_route' => 'examplepage', 'slug' => 1, '_controller' => 'App\\Controller\\MessageController::slugExample'], ['slug'], null, null, false, true, null]],
        160 => [[['_route' => 'requirementpage', '_controller' => 'App\\Controller\\MessageController::requirement'], ['slug'], null, null, false, true, null]],
        185 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\TableExampleController::show'], ['id'], null, null, false, true, null]],
        211 => [
            [['_route' => 'product_shows', '_controller' => 'App\\Controller\\TableExampleController::shows'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
