<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\LoginRequest;
class UserController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            // nếu đăng nhập thàng công thì 
            return redirect('dashboard');
        } else {
            return view('login');
        }
    }

    public function login(LoginRequest $rq)
    {
        
        return 1;
    }
}
