<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create(RegisterRequest $request)
    {
//        dd($request->all);
//        $data = $request->only(['name','email','birthday','password']);
        $data = $request->except(["password_confirmation"]);
//
//        $user = User::create($data);
        if ($user) {
            return redirect()->route("register.index");
        } else {
            abort(404);
        }
    }
