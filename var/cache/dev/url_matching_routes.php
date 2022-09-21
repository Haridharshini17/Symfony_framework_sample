<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'hello', '_controller' => 'App\\Controller\\MessageController::greetings'], null, null, null, false, false, null]],
        '/twigexample' => [[['_route' => 'twigpage', '_controller' => 'App\\Controller\\MessageController::twigexample'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/nextpage(?'
                    .'|(?:/(\\d+))?(*:65)'
                    .'|/([^/]++)(*:81)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        65 => [[['_route' => 'examplepage', 'slug' => 1, '_controller' => 'App\\Controller\\MessageController::slugExample'], ['slug'], null, null, false, true, null]],
        81 => [
            [['_route' => 'requirementpage', '_controller' => 'App\\Controller\\MessageController::requirement'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
