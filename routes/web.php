<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/// route for viewing admin users
Route::get('/admin', function () {
    return view('<h1>Admin Users</h1>');
});

// platform users
Route::get('/admin/users', function () {
    return view('<h1>platform Users</h1>');
});

// user profile page
Route::get('/admin/users/{username}', function ($username) {
    return view('<h1>$username</h1>');
});

// all games
Route::get('/admin/games', function () {
    return view('<h1>Games</h1>');
});

// individual game page
Route::get('/admin/games/{slug}', function ($game) {
    return view('<h1>$game</h1>');
});

//block user
Route::put('/admin/games/{username}/block', function () {
    return view('<h1>Unblocking...</h1>');
});

// delete game
Route::delete('/admin/games/{slug}', function ($game) {
    return view('<h1>Deleting game: $slug</h1>');
});