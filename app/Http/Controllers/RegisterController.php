<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\RegisterRequest;
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
    }
}
