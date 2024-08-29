<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function index()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $username = str_replace(['"', "'"], '', $request->username);
        $password = str_replace(['"', "'"], '', $request->password);
        try {
            $user = $this->user->login($password, $username);
            if ($user) {
                session()->put('user', $user);
                return view('dashboard.dashboard');
            }
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }
    }
    public function logout(LoginRequest $request)
    {
        $request->session()->flush();
        return redirect()->route('auth.login');
    }
}
