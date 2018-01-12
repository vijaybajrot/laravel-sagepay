<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'HomeController@test');

Route::get('/test', function () {
    //return view('payment');
});

Route::get('/test/success', function () {
	
    $formPassword = config('sage.formPassword');
    $env = config('sage.env');
    $crypt = filter_input(INPUT_GET, 'crypt');
    $decrypt = \Services\Sage\SagepayUtil::decryptAes($crypt, $formPassword[$env]);
    $decryptArr = \Services\Sage\SagepayUtil::queryStringToArray($decrypt);
    dd($decryptArr);
    
});

Route::get('/test/failure', function () {
	
    $formPassword = config('sage.formPassword');
    $env = config('sage.env');
    $crypt = filter_input(INPUT_GET, 'crypt');
    $decrypt = \Services\Sage\SagepayUtil::decryptAes($crypt, $formPassword[$env]);
    $decryptArr = \Services\Sage\SagepayUtil::queryStringToArray($decrypt);
    dd($decryptArr);
    
});
