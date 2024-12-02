<?php

// $router->get('/', function () use ($app) {
//     echo Flight::view()->render('base::welcome', ['message' => 'You are gonna do great things!']);
// });
Flight::route('/', function () {

    $Users =  Flight::db()->selectCollection('system', 'users')->find()->toArray();


    echo 'hello world!' . print_r($Users, true);
});
