<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\BannerAndTitle;
use App\Models\Counter;
use App\Models\FooterDetail;
use App\Models\Logo;
use App\Models\User;
use App\Models\WebsiteLinks;
use Illuminate\Http\Request;
use Auth;

class GeneralController extends Controller
{
    public function general_settings()
    {
        return view('admin.general.general',[
            'banner_titles'=>BannerAndTitle::get(),
            'logo'=>Logo::latest()->first(),
            'links'=>WebsiteLinks::latest()->first(),
            'counter'=>Counter::latest()->first(),
            'footer'=>FooterDetail::latest()->first(),
            'banners'=>Banner::get(),
        ]);
    }

    public function profile_settings()
    {
//        return User::where('id',Auth::user()->id)->first();
        return view('admin.profile.profile',[
            'user'=>User::where('id',Auth::user()->id)->first(),
        ]);
    }

    public function update_profile(Request $request)
    {

        User::update_profile($request);
        return back()->with('message','profile updated successfully');
    }
}
