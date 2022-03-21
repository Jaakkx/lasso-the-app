<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/lasso' => [[['_route' => 'app_lasso', '_controller' => 'App\\Controller\\LassoController::index'], null, null, null, false, false, null]],
        '/lasso/data' => [[['_route' => 'app_lasso_data', '_controller' => 'App\\Controller\\LassoController::addData'], null, null, null, false, false, null]],
        '/question' => [[['_route' => 'app_question', '_controller' => 'App\\Controller\\QuestionController::index'], null, null, null, false, false, null]],
        '/random/question' => [[['_route' => 'app_random_question', '_controller' => 'App\\Controller\\QuestionController::getRandomQuestion'], null, null, null, false, false, null]],
        '/update/ranking' => [[['_route' => 'app_update_ranking', '_controller' => 'App\\Controller\\QuestionController::updateRanking'], null, null, null, false, false, null]],
        '/ranking' => [[['_route' => 'app_ranking', '_controller' => 'App\\Controller\\QuestionController::getRanking'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'app_registration', '_controller' => 'App\\Controller\\RegistrationController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\RegistrationController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/register/([^/]++)(*:25)'
                .'|/login/([^/]++)(*:47)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:82)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        25 => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'], ['token'], null, null, false, true, null]],
        47 => [[['_route' => 'login', '_controller' => 'App\\Controller\\RegistrationController::login'], ['token'], null, null, false, true, null]],
        82 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
