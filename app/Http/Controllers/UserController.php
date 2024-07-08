<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('mypage', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->update($request->all());

        return redirect()->route('mypage')->with('status', 'Profile updated!');
    }
}
