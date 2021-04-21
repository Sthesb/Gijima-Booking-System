<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin.users.index');

    }
    // create user form
    public function create()
    {
        return view('admin.users.create');
    }

    // store user
    public function store(Request $request)
    {
        dd($request);
    }

}
