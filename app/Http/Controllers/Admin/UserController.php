<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //$users = User::orderBy('created_at', 'asc')->get();
        $users = User::latest()->get();
        //$users = User::oldest()->get();

        return $users;
    }
}
