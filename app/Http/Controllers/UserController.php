<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Status;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('status')->get();
        return view('user_table', ['users' => $users]);
    }


    public function login(Request $request)
    {
        $user = User::where($request->except('_token'))->first();
        if (!$user) {
            return redirect()->back()->with('status', 'success');
        }
        session(['user' => $user]);
        return redirect('users');
    }


    public function statusUpdate(Request $request)
    {
        $auth_user = session('user');
        Status::where('user_id', $auth_user->id)->update(['status_id' => $request->status_id]);
        $user = User::whereId($auth_user->id)->first();
        session(['user' => $user]);
        return redirect('users');

    }

    public function logout(Request $request)
    {
        // In your controller or wherever you want to destroy the session
        session()->flush();
        return redirect()->route('login');
    }
   
}
