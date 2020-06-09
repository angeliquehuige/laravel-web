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

Route::get("/home", function () {
    return view("index");
})->middleware('auth');

Route::get("/profile", function () {
    return view("profile");
})->middleware('auth');

//Route::get("/blog", function () {
//    return view("article", [
//        "articles" => App\Article::take(3)->latest()->get()
//    ]);
//});

// Routes for ArticlesController
Route::get("/blog", "ArticlesController@index")->middleware('auth');
Route::post("/blog", "ArticlesController@store")->middleware('auth');
Route::get("/blog/create", "ArticlesController@create")->middleware('auth');
Route::get("/blog/{article}", "ArticlesController@show")->middleware('auth');
Route::get("/blog/{article}/edit", "ArticlesController@edit")->middleware('auth');
Route::put("/blog/{article}", "ArticlesController@update")->middleware('auth');
Route::get("/blog/{article}/destroy", "ArticlesController@destroy")->middleware('auth');

// Route for dashboard
Route::resource("dashboard", "AssignmentsController" ,['parameters' => ['dashboard' => 'assignment']])->middleware('auth');
Route::get("/dashboard/assignment/create", "AssignmentsController@create")->middleware('auth');


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
