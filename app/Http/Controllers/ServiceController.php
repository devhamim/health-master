<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function add_services()
    {
        return view('admin.service.service',[
            'services'=>Service::get()
        ]);

    }

    public function store_services(Request $request)
    {
        Service::save_service($request);
        return back()->with('message','services added successfully');
    }

    public function edit_services($id)
    {
        return view('admin.service.edit_service',[
            'service'=>Service::find($id),
        ]);
    }

    public function update_services(Request $request)
    {
        

        Service::update_service($request);
        return back()->with('message','services update successfully');
    }


}
