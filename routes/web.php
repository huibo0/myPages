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

Route::get('/', function () {
    return view('index');
});

Route::get('project', function () {
    return view('index');
})->name('project');


Route::get('pages/{id}',function ($id){
    switch ($id){
        case 1:
            return view('projects.project');
            break;
        case 2:
            return view('projects.project2');
            break;
        case 3:
            return view('projects.project3');
            break;
        case 4:
            return view('projects.project4');
            break;
        case 5:
            return view('projects.project5');
            break;
        case 6:
            return view('projects.project6');
            break;
        case 7:
            return view('projects.project7');
            break;
        case 8:
            return view('projects.project8');
            break;
        case 9:
            return view('projects.project9');
            break;


    }
})->name('pages');


//信息
Route::resource('messages', 'MessageController');

