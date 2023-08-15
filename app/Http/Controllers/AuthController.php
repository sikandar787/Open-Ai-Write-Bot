<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\AuthenticateUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index () {
        if (Auth::check()) {
            return redirect()->route('home');
        }
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
            if (isset($request->isGenerate)) {
                return redirect()->route('generate');
            }
            return redirect()->route('home');
        }
        return redirect()->back();
    }
}
