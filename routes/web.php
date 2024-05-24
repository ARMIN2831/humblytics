<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
route::get('home', function () {return view('home');});
route::get('pricing', function () {return view('pricing');});
route::get('guides', function () {return view('guides');});
route::get('guides/framer', function () {return view('framer');});
route::get('tools', function () {return view('tools');});
