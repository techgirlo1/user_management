<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    // Fetch all users
    public function index()
    {
        $users = User::all();
        return response()->json(['users' => $users], 200);
    }

    // Fetch a particular user
    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'User not found.'], 404);
        }

        return response()->json(['user' => $user], 200);
    }

    // Update user
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'User not found.'], 404);
        }

        $user->update($request->all());

        return response()->json(['message' => 'User updated successfully.'], 200);
    }

    // Delete user (only accessible to admin)
    public function delete($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'User not found.'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'User deleted successfully.'], 200);
    }
}
