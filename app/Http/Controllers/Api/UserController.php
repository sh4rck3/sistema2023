<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        //User::findOrFail($id)->roles->pluck('name');
        $user = User::with('roles')->get();
        //$roles = Role::all();
        //Log::info("UserController::index=" . $user);
        //dd($roles);
        return UserResource::collection($user);
    }
}
