<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Role::all();
       return view('admin.roles.index', ['roles' => $roles]);
    }

    // store team
    public function store(Request $request )
    {
        $this->validate($request, [
            'role' => 'required | string'
        ]);

        Role::create([
            'Role' => $request['role']
        ]);

        return redirect('admin/roles');
    }
}
