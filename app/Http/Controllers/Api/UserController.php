<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return response()->json([
            'message' => 'List of users',
            'status' => 'success'
        ]);
    }

    public function store(Request $request)
    {
        return response()->json([
            'message' => 'User created successfully',
            'status' => 'success'
        ]);
    }

    public function show($id)
    {
        return response()->json([
            'message' => 'User details',
            'status' => 'success'
        ]);
    }

    public function update(Request $request, $id)
    {
        return response()->json([
            'message' => 'User updated successfully',
            'status' => 'success'
        ]);
    }

    public function destroy($id)
    {
        return response()->json([
            'message' => 'User deleted successfully',
            'status' => 'success'
        ]);
    }
}
