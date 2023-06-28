<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
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
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return back();
        } else {
            return back()->with('error', 'User not found.');
        }
    }
}
