<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // carregar view
        return view('users.index');
    }

    public function create()
    {
        // carregar a view
        return view('users.create');
    }

    public function store()
    {
        
    }
}
