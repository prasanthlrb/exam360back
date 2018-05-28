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
#Package Process
$router->get('/package','packageController@index');
$router->post('/package','packageController@store');
$router->post('/package/{id}','packageController@deleteData');
$router->get('/package/{id}','packageController@edit');


//Institute process
$router->post('/institute','InstituteController@store');
$router->get('/institute','InstituteController@index');
$router->get('/institute/{id}','InstituteController@edit');

#Exam_Management Process
#ExamTitle
$router->post('/extitle','ExamManageController@titleStore');
$router->post('/extitleupadte','ExamManageController@titleUpdate');
$router->post('/extitlehide','ExamManageController@titlehide');
$router->get('/extitle','ExamManageController@titleView');
$router->get('/extitle/{id}','ExamManageController@titleEdit');
#Language
$router->post('/exlan','ExamManageController@lanStore');
$router->post('/exlanupadte','ExamManageController@lanUpdate');
$router->post('/exlanhide','ExamManageController@lanhide');
$router->get('/exlan','ExamManageController@lanView');
$router->get('/exlan/{id}','ExamManageController@lanEdit');
#Unit
$router->post('/exunit','ExamManageController@UnitStore');
$router->post('/exunitupadte','ExamManageController@UnitUpdate');
$router->post('/exunithide','ExamManageController@Unithide');
$router->get('/exunit','ExamManageController@UnitView');
$router->get('/exunit/{id}','ExamManageController@UnitEdit');