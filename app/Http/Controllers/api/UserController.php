<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return UserResource::collection(User::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
        $validData['password'] = bcrypt($validData['password']);
        User::create($validData);
        return response()->json(['message' => 'Data berhasil dibuat']);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return new UserResource($user);
    }

    /**
     * Show the form for editing the specified resource.
    */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validData = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
        if(!empty($validData['password'])) {
            $validData['password'] = bcrypt($validData['password']);
        } else {
            unset($validData['password']);
        }
        $user->update($validData);
        return response()->json(['message' => 'Data berhasil diedit']);
    }

    /**
     * Remove the specified resource from storage.
    */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
