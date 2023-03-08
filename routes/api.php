<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Task_CategoriesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

#To get all task
Route::get('/tasksC',[Task_CategoriesController::class, 'index']);
Route::prefix('/taskc')->group( function (){
    Route::post('/store', [Task_CategoriesController::class, 'store']);
    Route::put('/{id}', [Task_CategoriesController::class,'update']);
    Route::delete('/{id}', [Task_CategoriesController::class, 'destroy']);
}
);



