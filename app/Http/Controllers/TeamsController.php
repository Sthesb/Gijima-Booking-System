<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Team::all();
       return view('admin.teams.index', ['teams' => $teams]);
    }

    // store team
    public function store(Request $request )
    {
        $this->validate($request, [
            'team' => 'required | string'
        ]);

        Team::create([
            'Team' => $request['team']
        ]);

        return redirect('admin/teams');
    }
}
