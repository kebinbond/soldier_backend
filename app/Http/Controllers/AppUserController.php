<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AppUserController extends Controller
{
    public function get (AppUser $model) {
        return view('pages.members', ['members' => $model->paginate(15)]);
    }
    public function register (Request $request) {

        // $Validator = Validator::make($request, [
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        //     'phone' => ['required', 'string'],
        // ]);

        return AppUser::create([
            'name' => $request['username'],
            'email' => $request['email'],
            'phone_number' => $request['phone'],
            'password' => Hash::make($request['password']),
        ]);

        // return response()->json($Validator, 200);
    }

    public function update(Request $request, $id) {
        $user = AppUser::findOrFail($id);
        if ($request->input('status')) {
            $user->status = false;
        } else {
            $user->status = true;
        }
        $user->save();
        return back();
    }

    public function destroy($id)
    {
        $user = AppUser::find($id);
        if($user) {
            $user->delete($id);
            return back();
        } else {
            return back()->with('error', 'User not found');
        }
    }
}
