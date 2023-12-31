<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TestAPIController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('first-api', [TestAPIController::class, 'firstAPI']);
Route::get('/get-blog/{id?}', [BlogController::class, 'getBlog']);

Route::post('/add-blog', [BlogController::class, 'addBlog']);

Route::put('/blog-update',[BlogController::class,'updateBlog']);

Route::delete('/delete-blog/{id}',[BlogController::class,'deleteBlog']);

Route::get('/search-data/{param}',[BlogController::class,'searchBlogByName']);

Route::post('/save-valid-blog',[BlogController::class,'validateData']);


/*notes
--1
-http://localhost:8000/api/first-api

-2


*/
