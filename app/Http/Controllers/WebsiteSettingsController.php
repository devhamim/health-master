<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Banner;

use App\Models\ContactUs;
use App\Models\Counter;
use App\Models\FooterDetail;
use App\Models\Link;
use App\Models\Logo;
use App\Models\WebsiteLinks;
use Illuminate\Http\Request;
use Mail;

class WebsiteSettingsController extends Controller
{
    //
    public function store_logo(Request $request)
    {
//        return $request;
        Logo::saveWebsiteLogo($request);
        return back()->with('message','Logo added successfully');
    }

    public function store_links(Request $request)
    {
//        return $request;
        WebsiteLinks::saveWebsiteLinks($request);
        return back()->with('message','Links added successfully');
    }
    public function store_counter(Request $request)
    {
//        return $request;
        Counter::saveCounter($request);
        return back()->with('message','Counter added successfully');
    }

    public function store_footer(Request $request)
    {
        FooterDetail::saveFooterDetail($request);
        return back()->with('message','Footer added successfully');
    }

    public function store_main_banner(Request $request)
    {
        Banner::saveBanner($request);
        return back()->with('message','Banner added successfully');
    }
    public function edit_main_banner($id)
    {
        return view('admin.general.general-pages.website_banner_edit',[
            'banner'=>Banner::find($id),
        ]);

    }

    public function update_main_banner(Request $request)
    {
        Banner::updateBanner($request);
        return back()->with('message','Banner update successfully');
    }

    public function appointment(Request $request)
    {
        Appointment::save_appointment($request);
//        $data =[
//            'name'=>$request->name,
//            'number'=>$request->number,
//            'email'=>$request->email,
//            'service_id'=>$request->service_id,
//            'date'=>$request->date,
//            'select_time'=>$request->select_time,
//        ];
//        $user['to']='abc@gmail.com';
//        Mail::send('frontend.appointment.appointment_mail',$data,function ($message) use ($user){
//            $message->to($user['to']);
//            $message->subject('Appointment');
//        });
        return back()->with('message','Appointment booked successfully');

    }

    public function contact(Request $request)
    {
        ContactUs::save_contact($request);
//        $data =[
//            'name'=>$request->name,
//            'number'=>$request->number,
//            'email'=>$request->email,
//            'subject'=>$request->subject,
//            'message'=>$request->message,
//        ];
//        $user['to']='abc@gmail.com';
//        Mail::send('frontend.contact.contact_mail',$data,function ($message) use ($user){
//            $message->to($user['to']);
//            $message->subject('Contact');
//        });
        return back()->with('message','Message sent successfully');
    }
}
