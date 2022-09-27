<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'add_employee' => [[], ['_controller' => 'App\\Controller\\EmployeeController::create'], [], [['text', '/employee/create']], [], [], []],
    'show_employee' => [['id'], ['_controller' => 'App\\Controller\\EmployeeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/employee/show']], [], [], []],
    'update_employee' => [['id'], ['_controller' => 'App\\Controller\\EmployeeController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/employee/update']], [], [], []],
    'delete_employee' => [['id'], ['_controller' => 'App\\Controller\\EmployeeController::merge'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/employee/merge']], [], [], []],
    'show_allemployee' => [[], ['_controller' => 'App\\Controller\\EmployeeController::showAll'], [], [['text', '/employee/show']], [], [], []],
    'app_example' => [[], ['_controller' => 'App\\Controller\\ExampleController::index'], [], [['text', '/example']], [], [], []],
    'hello' => [[], ['_controller' => 'App\\Controller\\MessageController::greetings'], [], [['text', '/']], [], [], []],
    'nextpage' => [[], ['_controller' => 'App\\Controller\\MessageController::nextpage'], [], [['text', '/nextpage']], [], [], []],
    'examplepage' => [['slug'], ['slug' => 1, '_controller' => 'App\\Controller\\MessageController::slugExample'], ['slug' => '\\d+'], [['variable', '/', '\\d+', 'slug', true], ['text', '/nextpage']], [], [], []],
    'requirementpage' => [['slug'], ['_controller' => 'App\\Controller\\MessageController::requirement'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/nextpage']], [], [], []],
    'twigpage' => [[], ['_controller' => 'App\\Controller\\MessageController::twigexample'], [], [['text', '/twigexample']], [], [], []],
    'app_table_example' => [[], ['_controller' => 'App\\Controller\\TableExampleController::createRecord'], [], [['text', '/table/example']], [], [], []],
    'product_show' => [['id'], ['_controller' => 'App\\Controller\\TableExampleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/record']], [], [], []],
    'product_shows' => [['id'], ['_controller' => 'App\\Controller\\TableExampleController::shows'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/products']], [], [], []],
];
