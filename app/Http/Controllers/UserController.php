<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Team;
use App\Models\User;
use App\Models\Location;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();

        return view('admin.users.index', ['users' => $users] );

    }
    // show user details
    public function show(User $user)
    {
        $user = $user;
        $location = Location::find($user->location_id);
        $team = Team::find($user->team_id);
        $role = Role::find($user->role_id);
        
        return view('admin.users.show', [
            'user'=>$user, 
            'location' => $location,
            'team' => $team,
            'role' => $role,

            ]);
        
    }


    // create user form
    public function create()
    {
        $locations = Location::all();
        $roles = Role::all();
        $teams = Team::all();
        
        return view('admin.users.create', [
            'locations' => $locations,
            'roles' => $roles,
            'teams' => $teams,
        ]);
    }

    // store user
    public function store(Request $request)
    {

        // dd($request);

        $this->validate($request, [
            'name' => 'required | string',
            'surname' => 'required | string',
            'email' => 'required | email',
            'employee_number' => 'required | string',
            'location_id' => 'required | integer',
            'role_id' => 'required | integer',
            'team_id' => 'required | integer',
            'password' => 'required | string | confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'employeeNo' => $request->employee_number,
            'location_id' =>  $request->location_id,
            'role_id' =>  $request->role_id,
            'team_id' =>  $request->team_id,
            'password' =>  Hash::make($request->password),
        ]);
    
        return redirect()->route('admin.users');
    }

    public function edit()
    {
        return view('admin.users.edit');
    }
}
