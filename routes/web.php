<?php

use App\Http\Controllers\Api\V1\TravelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
