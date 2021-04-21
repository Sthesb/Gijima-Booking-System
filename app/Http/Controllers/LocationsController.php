<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationsController extends Controller
{
    public function index()
    {
        $locations = Location::all();
       return view('admin.locations.index', ['locations' => $locations]);
    }

    // store team
    public function store(Request $request )
    {
        $this->validate($request, [
            'location' => 'required | string'
        ]);

        Location::create([
            'Location' => $request['location']
        ]);

        return redirect('admin/locations');
    }
}
