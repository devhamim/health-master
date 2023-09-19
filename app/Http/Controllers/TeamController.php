<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function add_team()
    {
        return view('admin.team.team',[
            'teams'=>Team::get(),
            'services'=>Service::get()
        ]);

    }

    public function store_team(Request $request)
    {
        Team::save_team($request);
        return back()->with('message','Team added successfully');
    }

    public function edit_team($id)
    {
        return view('admin.team.edit_team',[
            'team'=>Team::find($id),
            'services'=>Service::get()
        ]);
    }

    public function update_team(Request $request)
    {
        Team::update_team($request);
        return back()->with('message','Team update successfully');
    }
}
