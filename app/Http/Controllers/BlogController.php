<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function add_blogs()
    {
        return view('admin.blogs.blogs',[
            'blogs'=>Blog::get()
        ]);

    }

    public function store_blogs(Request $request)
    {
        Blog::save_blogs($request);
        return back()->with('message','Blogs added successfully');
    }

    public function edit_blogs($id)
    {
        return view('admin.blogs.edit_blogs',[
            'blog'=>Blog::find($id),
        ]);
    }

    public function update_blogs(Request $request)
    {


        Blog::update_blogs($request);
        return back()->with('message','Blogs update successfully');
    }
}
