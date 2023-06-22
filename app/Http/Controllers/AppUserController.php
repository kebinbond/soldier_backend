<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AppUserController extends Controller
{
    public function register (Request $request) {
        
        // DB::insert('insert into app_users (name, email, phone_number, password) values (' + $request['username'] + ')');
        // return AppUser::create([
        //     'name' => $request['username'],
        //     'email' => $request['email'],
        //     'phone_number' => $request['phone'],
        //     'password' => Hash::make($request['password']),
        // ]);
        return response()->json($request['username']);
    }
}
