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
$router->get('/unit_test/{id}', function (){
  return view('admin/unit');
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
$router->post('/extitle/{id}','ExamManageController@titleUpdate');
$router->post('/extitlehide','ExamManageController@titlehide');
$router->get('/extitle','ExamManageController@titleView');
$router->get('/extitle/{id}','ExamManageController@titleEdit');
#Language
$router->post('/exlan','ExamManageController@lanStore');
$router->post('/exlan/{id}','ExamManageController@lanUpdate');
$router->post('/exlanhide','ExamManageController@lanhide');
$router->get('/exlan','ExamManageController@lanView');
$router->get('/exlan/{id}','ExamManageController@lanEdit');
#Unit
$router->post('/exunit','ExamManageController@UnitStore');
$router->post('/exunitupadte','ExamManageController@UnitUpdate');
$router->post('/exunithide','ExamManageController@Unithide');
$router->get('/exunit','ExamManageController@UnitView');
$router->get('/exunit/{id}','ExamManageController@UnitEdit');

#Subject
$router->get('/subject/{id}','SubjectController@index');
$router->get('/subjectEdit/{id}','SubjectController@subEdit');
$router->get('/subjectselect','SubjectController@subjectSelect');
$router->post('/subStore','SubjectController@subStore');
$router->post('/subUpdate/{id}','SubjectController@subUpdate');
$router->post('/subDelete','SubjectController@subDelete');

#Chapter
$router->post('/chapstore','SubjectController@chapStore');
$router->get('/chapedit/{id}','SubjectController@chapEdit');
$router->post('/chapUpdate/{id}','SubjectController@chapUpdate');
$router->post('/chapDelete','SubjectController@chapDelete');

#QuestionManagement

$router->get('/questionlist/{id}','QuestionManagementController@index');
$router->get('/addquestion/{id}','QuestionManagementController@addQuestion');
$router->post('/savequestion','QuestionManagementController@saveQuestion');