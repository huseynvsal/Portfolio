<?php

use Illuminate\Support\Facades\Route;

Route::get('/','Main\MainController@mainpage');
Route::get('/mainpage','Main\MainController@mainpage');
Route::post('/message','Main\MainController@add_messages')->name('message');


Route::get('/main_table','Admin\AdminController@main_table')->middleware('auth');
Route::get('/messages_table','Admin\AdminController@messages_table')->middleware('auth');
Route::get('/additional_categories_table','Admin\AdminController@additional_categories_table')->middleware('auth');

Route::post('/project','Admin\AdminController@upsert_project')->name('project');
Route::post('/tool','Admin\AdminController@add_tool')->name('tool');
Route::post('/delete_project','Admin\AdminController@delete_project')->name('delete_project');
Route::post('/delete_message','Admin\AdminController@delete_message')->name('delete_message');
Route::post('/delete_tool','Admin\AdminController@delete_tool')->name('delete_tool');
Route::post('/message_seen','Admin\AdminController@message_seen')->name('message_seen');

Auth::routes();
