<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\AuthenticateUser;
use App\Models\User;
use Auth;
use Hash;

class AuthController extends Controller
{
    public function index () {
        return view('login');
    }
    public function signup () {
        return view('signup');
    }
    public function registerUser(SignupRequest $request) {
        User::create($request->validated());
        return redirect()->route('home');
    }

    public function authenticateUser(AuthenticateUser $request) {
        if (Auth::attempt(['email' => $request->validated('email'), 'password' => $request->validated('password')])) {
            return redirect()->route('home');
        }
        return redirect()->back();
    }
}
