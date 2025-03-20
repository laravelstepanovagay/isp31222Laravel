<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }
    public function login(LoginRequest $request)
    {
        $data = $request->validated();

        if (Auth::attempt($data)) {
//    correct
            return redirect()->route("profile.index");
        } else {
            return redirect()->back()->withErrors([
                "password" => "Неверный логин или пароль"
            ]);
        }
    }
//    wrong
        public function logout(Request $request)
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route("login.index");
        }
    }


