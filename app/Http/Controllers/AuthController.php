<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Location;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    // Login
    public function login(Request $request)
    {
        
        // $this->validate($request, [
        //     'employeeNo'=> 'required | numeric',
        //     'password'=> 'required',
        // ]);

        // if(!auth()->attempt($request->only('employeeNo', 'password'))){
        //     return back()->with('status', 'Incorrect Login Details');
        // }
        $user = User::where('employeeNo', $request->employeeNo)->get();
        $location = Location::find($user[0]['location_id']);
        $role = Role::find($user[0]['role_id']);
        $team = Location::find($user[0]['team_id']);
        // dd($role->Role);
        
        if($role->Role == 'Admin'){
            return redirect()->route('admin');
        }else{
            return redirect()->route('user.index');
        }
            

        
    }
}
