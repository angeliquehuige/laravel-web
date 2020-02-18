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


Route::get("/dashboard", function () {
    return view("dashboard");
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

// Router for AssignmentsController
Route::get("/dashboard", "TermsController@index");
Route::post("/dashboard", "AssignmentsController@store");
Route::get("/dashboard/create", "AssignmentsController@create");
Route::get("/dashboard/{assignment}", "AssignmentsController@show");
Route::get("/dashboard/{assignment}/edit", "AssignmentsController@edit");
Route::put("/dashboard/{assignment}", "AssignmentsController@update");








