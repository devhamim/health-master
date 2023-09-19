<?php

namespace App\Http\Controllers;

use App\Models\Management;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    //
    public function add_management()
    {
        return view('admin.management.management',[
            'managements'=>Management::get()
        ]);

    }

    public function store_management(Request $request)
    {
        Management::save_management($request);
        return back()->with('message','management added successfully');
    }

    public function edit_management($id)
    {
        return view('admin.management.edit_management',[
            'management'=>Management::find($id),
        ]);
    }

    public function update_management(Request $request)
    {
        Management::update_management($request);
        return back()->with('message','management update successfully');
    }
}
