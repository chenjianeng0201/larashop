<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app('Dingo\Api\Routing\Router');


//$api->version('v1', function($api) {
//    $api->get('version', function() {
//        return response('this is version v1');
//    });
//});


//$api->version('v1', [
//   'namespace' => 'App\Http\Controller\Admin\Api'
//], function ($api) {
//    $api->post('login', 'AdminsController@login')
//        ->name('api.admins.login');
//});
$api->version('v1', [
    'namespace' => 'App\Http\Controllers\Admin\Api'
], function ($api) {
    $api->post('login', 'AdminsController@login')
        ->name('api.admins.login');
});

$api->version('v2', function($api) {
    $api->get('version', function() {
        return response('this is version v2');
    });
});
