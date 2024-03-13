<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //$users = User::latest()->get();
        //$users = User::oldest()->get();        
        return User::orderBy('id', 'asc')->get();
    }

    public function store()
    {
        return User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);
    }    
}
