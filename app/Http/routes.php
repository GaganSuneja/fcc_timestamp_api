<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () {
    echo "Hello this is the timestamp api in accordance to fcc backend development project<br/> created using lumen";

});


/*
yo is our get variable here which api recieves for callback and passes the control 
to main controller
*/
$app->get('/{yo}','Controller@result');

