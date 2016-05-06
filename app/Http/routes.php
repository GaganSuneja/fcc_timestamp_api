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
    echo "Hello this is the timestamp api in accordance
     to fcc backend development project<br/> created using lumen <br/><br/><br/><br/><br/><br/><br/><br/>


     Do not supply a floating point number as argument it will throw an 404 exception <br/><br/><br/><br/><br/><br/><br/><br/>


     Created with <3 by Gagan Suneja<br/>

     Github Link https://github.com/GaganSuneja/fcc_timestamp_api
     ";

});


/*
yo is our get variable here which api recieves for callback and passes the control 
to main controller
*/
$app->get('/{yo}','Controller@result');

