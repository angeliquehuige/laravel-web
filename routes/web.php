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

Route::get("/", function () {
    return view("index");
});

Route::get("/profile", function () {
    return view("profile");
});

//Route::get("/blog", function () {
//    return view("article", [
//        "articles" => App\Article::take(3)->latest()->get()
//    ]);
//});

// Routes for ArticlesController
Route::get("/blog", "ArticlesController@index");
Route::post("/blog", "ArticlesController@store");
Route::get("/blog/create", "ArticlesController@create");
Route::get("/blog/{article}", "ArticlesController@show");
Route::get("/blog/{article}/edit", "ArticlesController@edit");
Route::put("/blog/{article}", "ArticlesController@update");
Route::get("/blog/{article}/destroy", "ArticlesController@destroy");

// Route for dashboard
Route::resource("dashboard", "AssignmentsController" ,['parameters' => ['dashboard' => 'assignment']]);






