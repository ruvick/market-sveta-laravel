<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\ApiIndexController; 

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/get_category_filter/{catid}', [ApiIndexController::class, "get_category_filter"])->name("apihome");
Route::get('/get_sorted_category_filter/{catid}', [ApiIndexController::class, "get_sorted_category_filter"])->name("sortedfilter");
Route::get('/get_search_pds', [ApiIndexController::class, "get_search_pds"])->name("searchpds");

