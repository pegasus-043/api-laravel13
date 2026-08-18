<?php

use App\Http\Controllers\Api\UserController;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function (Request $request) {
       return response()->json([
        'message' => 'Welcome to the API',
        'status' => 'success'
    ]);
});

// http://127.0.0.1:8000/api/

// Route::get('/users', [UserController::class, 'index']);
// Route::post('/users', [UserController::class, 'store']);
// Route::get('/users/{id}', [UserController::class, 'show']);
// Route::put('/users/{id}', [UserController::class, 'update']);
// Route::delete('/users/{id}', [UserController::class, 'destroy']);

Route::apiResource('users', UserController::class);

Route::get('/prueba', function () {

    $data = [
        'body' => 'Tarea de prueba',
        'user_id' => 1
    ];

    $task = Task::create($data);
    $task->save();

    return $task;
});
