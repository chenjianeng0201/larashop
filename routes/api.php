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

$api->version('v1', [
    'namespace' => 'App\Http\Controllers\Admin\Api'
], function ($api) {
	// 对登录做节流限制
	$api->group([
		'middleware' => 'api.throttle',
		'limit' => config('api.rate_limits.sign.limit'),
		'expires' => config('api.rate_limits.sign.expires'),
		// 'limit' => 1,
		// 'expires' => 1,
	], function($api){
		$api->post('login', 'AdminsController@login')
        ->name('api.admins.login');
	});   

    $api->post('logout', 'AdminsController@logout')
    	->name('api.admins.logout');    
});

$api->version('v2', function($api) {
    $api->get('version', function() {
        return response('this is version v2');
    });
});
