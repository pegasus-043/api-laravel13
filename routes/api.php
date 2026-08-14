<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function (Request $request) {
       return response()->json([
        'message' => 'Welcome to the API',
        'status' => 'success'
    ]);
});

// Listar registros
Route::get('/users', function (Request $request) {
    return response()->json([
        'message' => 'List of users',
        'status' => 'success'
    ]);
});
// Crear registros
Route::post('/users', function (Request $request) {
    return response()->json([
        'message' => 'User created successfully',
        'status' => 'success'
    ]);
});
// Recuperar un registro
Route::get('/users/{id}', function (Request $request, $id) {
    return response()->json([
        'message' => 'User retrieved successfully: '.$id,
        'status' => 'success'
    ]);
});
// Actualizar un registro
Route::put('/users/{id}', function (Request $request, $id) {
    return response()->json([
        'message' => 'User updated successfully: '.$id,
        'status' => 'success'
    ]);
});
// Eliminar un registro
Route::delete('/users/{id}', function (Request $request, $id) {
    return response()->json([
        'message' => 'User deleted successfully: '.$id,
        'status' => 'success'
    ]);
});
