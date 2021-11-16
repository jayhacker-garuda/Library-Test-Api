<?php

use App\Http\Controllers\API\BookController;
use App\Http\Controllers\API\IssueController;
use App\Http\Controllers\API\MemberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('books', BookController::class);
Route::resource('members', MemberController::class);
Route::resource('issue-book', IssueController::class);