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
        '/service/example/2' => [[['_route' => 'example_2', '_controller' => 'App\\Controller\\ExampleController::new'], null, null, null, false, false, null]],
        '/service/injectedexample' => [[['_route' => 'service_injected', '_controller' => 'App\\Controller\\InjectedController::new'], null, null, null, false, false, null]],
        '/nextpage' => [[['_route' => 'nextpage', '_controller' => 'App\\Controller\\MessageController::nextpage'], null, null, null, false, false, null]],
        '/twigexample' => [[['_route' => 'twigpage', '_controller' => 'App\\Controller\\MessageController::twigexample'], null, null, null, false, false, null]],
        '/service/example' => [[['_route' => 'service_example', '_controller' => 'App\\Controller\\ServiceExample::new'], null, null, null, false, false, null]],
        '/service/examples' => [[['_route' => 'service_examples', '_controller' => 'App\\Controller\\ServiceExample2::new'], null, null, null, false, false, null]],
        '/exampleform' => [[['_route' => 'exampleshow', '_controller' => 'App\\Controller\\StudentRegistrationController::new'], null, null, null, false, false, null]],
        '/table/example' => [[['_route' => 'app_table_example', '_controller' => 'App\\Controller\\TableExampleController::createRecord'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'message', '_controller' => 'App\\Controller\\MessageController::greetings'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/e(?'
                    .'|mployee/(?'
                        .'|show/([^/]++)(*:71)'
                        .'|update/([^/]++)(*:93)'
                        .'|merge/([^/]++)(*:114)'
                    .')'
                    .'|xampleform/([^/]++)(*:142)'
                .')'
                .'|/nextpage(?'
                    .'|(?:/(\\d+))?(*:174)'
                    .'|/([^/]++)(*:191)'
                .')'
                .'|/record/([^/]++)(*:216)'
                .'|/products/([^/]++)(*:242)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        71 => [[['_route' => 'show_employee', '_controller' => 'App\\Controller\\EmployeeController::show'], ['id'], null, null, false, true, null]],
        93 => [[['_route' => 'update_employee', '_controller' => 'App\\Controller\\EmployeeController::update'], ['id'], null, null, false, true, null]],
        114 => [[['_route' => 'delete_employee', '_controller' => 'App\\Controller\\EmployeeController::merge'], ['id'], null, null, false, true, null]],
        142 => [[['_route' => 'records_show', '_controller' => 'App\\Controller\\StudentRegistrationController::show'], ['id'], null, null, false, true, null]],
        174 => [[['_route' => 'examplepage', 'slug' => 1, '_controller' => 'App\\Controller\\MessageController::slugExample'], ['slug'], null, null, false, true, null]],
        191 => [[['_route' => 'requirementpage', '_controller' => 'App\\Controller\\MessageController::requirement'], ['slug'], null, null, false, true, null]],
        216 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\TableExampleController::show'], ['id'], null, null, false, true, null]],
        242 => [
            [['_route' => 'product_shows', '_controller' => 'App\\Controller\\TableExampleController::shows'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
