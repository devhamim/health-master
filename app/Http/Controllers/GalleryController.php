<?php

namespace App\Http\Controllers;

use App\Models\VideoGallery;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function tech_web_add_gallery()
    {
        return view('admin.gallery.gallery',[
            'galleries'=>Gallery::get()
        ]);

    }

    public function tech_web_store_gallery(Request $request)
    {
        Gallery::save_gallery($request);
        return back()->with('message','gallery added successfully');
    }

    public function tech_web_edit_gallery($id)
    {
        return view('admin.gallery.edit_gallery',[
            'gallery'=>Gallery::find($id),
        ]);
    }

    public function tech_web_update_gallery(Request $request)
    {


        Gallery::update_gallery($request);
        return back()->with('message','gallery update successfully');
    }

//    video gallery
    public function tech_web_add_video_gallery()
    {
        return view('admin.gallery.video_gallery',[
            'galleries'=>VideoGallery::get()
        ]);

    }

    public function tech_web_store_video_gallery(Request $request)
    {
        VideoGallery::save_gallery($request);
        return back()->with('message','gallery added successfully');
    }

    public function tech_web_edit_video_gallery($id)
    {
        return view('admin.gallery.edit_video_gallery',[
            'gallery'=>VideoGallery::find($id),
        ]);
    }

    public function tech_web_update_video_gallery(Request $request)
    {
        VideoGallery::update_gallery($request);
        return back()->with('message','gallery update successfully');
    }

}
