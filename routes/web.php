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

$router->get('/', function (){
  return view('index');
});
$router->get('/lrb-admin', function (){
  return view('login');
});
$router->get('/dashboard', function (){
  return view('admin/dashboard');
});
$router->get('/institute', function (){
  return view('admin/create_center');
});
$router->get('/institute_list', function (){
  return view('admin/institute_list');
});
$router->get('/inst_pack', function (){
  return view('admin/inst_pack');
});

$router->get('/package','packageController@index');
$router->post('/package','packageController@store');
$router->post('/package/{id}','packageController@deleteData');
$router->get('/package/{id}','packageController@edit');
