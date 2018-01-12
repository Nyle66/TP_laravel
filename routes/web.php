<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/addCompte', array(
    'as'=> 'addcompte',
    'uses'=>'Controller@addCompteMethod'
));

Route::post('/addBitcoin',array(
    'as'=>'addBitcoin',
    'uses'=>'Controller@addBitcoinService'
));

Route::post('/addEtherium',array(
    'as'=>'addEtherium',
    'uses'=>'Controller@addEtheriumService'
));

Route::get('/bitTrans',array(
    'as'=>'bitTrans',
    'uses'=>'Controller@bitTransMethod'
));

Route::post('/bitTransaction',array(
    'as'=>'bitTransaction',
    'uses'=>'Controller@bitTransactionMethod'
));

Route::get('/ethTrans',array(
    'as'=>'ethTrans',
    'uses'=>'Controller@ethTransMethod'
));

Route::post('/ethTransaction',array(
    'as'=>'ethTransaction',
    'uses'=>'Controller@ethTransactionMethod'
));




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
