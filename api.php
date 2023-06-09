<?php

use App\Controllers\HomeController;
use App\Controllers\LoginController;

use App\Core\Router;


/*-----------initialize routes-----------*/

Router::get( '', [ HomeController::class, 'index' ] );

Router::post( 'test', [ HomeController::class, 'test' ] );
Router::get( 'data', [ HomeController::class, 'someData' ] );

Router::group( 'user', function () {
    Router::get( '', [ HomeController::class, 'index' ] );

    Router::get( 'new', [ HomeController::class, 'test' ] );
} );

Router::group( 'api', function() {
    Router::post( '/login', [LoginController::class, 'login' ] );
} );
