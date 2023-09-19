<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\BannerAndTitle;
use App\Models\Blog;
use App\Models\Counter;
use App\Models\Gallery;
use App\Models\Management;
use App\Models\Package;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\VideoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('frontend.home.home',[
            'services'=>Service::where('status',1)->where('service_home',1)->get(),
            'about'=>DB::table('abouts')->latest()->first(),
            'teams'=>Team::where('status',1)->where('add_home',1)->get(),
            'testimonials'=>Testimonial::where('status',1)->where('add_home',1)->get(),
            'info'=>DB::table('appointment_infos')->latest()->first(),
            'packages'=>Package::where('status',1)->where('add_home',1)->get(),
            'blogs'=>Blog::where('status',1)->where('add_home',1)->get(),
            'titles'=>BannerAndTitle::get(),
            'banners'=>Banner::get(),
            'counter'=>Counter::latest()->first(),
        ]);
    }
    public function services_details($id)
    {
        return view('frontend.services.service_details',[
            'service'=>Service::find($id),
            'services'=>Service::where('status',1)->where('service_home',1)->get(),
        ]);
    }

    public function all_details()
    {

        return view('frontend.services.all_services',[
            'services'=>Service::where('status',1)->paginate(8),
            'banner'=>BannerAndTitle::where('page','services')->latest()->first(),
        ]);
    }

    public function about_page()
    {
        return view('frontend.about.about_page',[
            'about'=>DB::table('abouts')->latest()->first(),
            'testimonials'=>Testimonial::where('status',1)->where('add_home',1)->get(),
            'banner'=>BannerAndTitle::where('page','testimonial')->latest()->first(),
        ]);
    }
    public function team_page()
    {
        return view('frontend.team.team_page',[
            'teams'=>Team::where('status',1)->get(),
            'banner'=>BannerAndTitle::where('page','doctors')->latest()->first(),
            'services'=>Service::get(),
        ]);
    }
    public function management_page()
    {
        return view('frontend.management.management_page',[
            'managements'=>Management::where('status',1)->paginate(8),
            'banner'=>BannerAndTitle::where('page','managements')->latest()->first(),
        ]);
    }
    public function testimonial_page()
    {
        return view('frontend.testimonial.testimonial_page',[
            'testimonials'=>Testimonial::where('status',1)->paginate(8),
            'banner'=>BannerAndTitle::where('page','testimonial')->latest()->first(),
        ]);
    }
    public function appointment_page()
    {
        return view('frontend.appointment.appointment_page',[
            'banner'=>BannerAndTitle::where('page','appointment')->latest()->first(),
            'services'=>Service::where('status',1)->where('service_home',1)->get(),

        ]);
    }
    public function package_page()
    {
        return view('frontend.package.package_page',[
            'packages'=>Package::where('status',1)->paginate(6),
            'banner'=>BannerAndTitle::where('page','packages')->latest()->first(),
        ]);
    }
    public function blogs_page()
    {
        return view('frontend.blogs.blogs_page',[
            'blogs'=>Blog::where('status',1)->paginate(6),
            'banner'=>BannerAndTitle::where('page','blogs')->latest()->first(),
        ]);
    }
    public function blogs_details($id)
    {
        return view('frontend.blogs.blogs_details',[
            'blog'=>Blog::find($id),

        ]);
    }

    public function gallery_page()
    {
        return view('frontend.gallery.gallery_page',[
            'galleries'=>Gallery::where('status',1)->get(),
            'banner'=>BannerAndTitle::where('page','gallery')->latest()->first(),
        ]);
    }
    public function video_gallery_page()
    {
        return view('frontend.gallery.video_gallery_page',[
            'galleries'=>VideoGallery::where('status',1)->get(),
            'banner'=>BannerAndTitle::where('page','gallery')->latest()->first(),
        ]);
    }

    public function contacts()
    {
        return view('frontend.contact.contact',[
            'banner'=>BannerAndTitle::where('page','contacts')->latest()->first(),
        ]);

    }


}
