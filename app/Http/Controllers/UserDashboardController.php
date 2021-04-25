<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    // index
    public function index(){
        return view('user.index');
    }
}
