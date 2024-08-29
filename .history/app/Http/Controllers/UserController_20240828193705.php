<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\LoginRequest;
use App\Models\User;

class UserController extends Controller
{
    public function indexBlog(){

        return view('admin.manageBlogs');
    }
    public function indexCreateBlog(){
        return view('admin.createBlogs');
    }
}
