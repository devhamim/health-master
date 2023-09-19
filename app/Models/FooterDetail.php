<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterDetail extends Model
{
    use HasFactory;
    public static $data;
    public static function saveFooterDetail($request)
    {
//        dd($request);
        if($request->id){
            self::$data = FooterDetail::find($request->id);
            self::$data->details =$request->details;
            self::$data->credit =$request->credit;
            self::$data->save();
        }
        else{
            self::$data = new FooterDetail();
            self::$data->details =$request->details;
            self::$data->credit =$request->credit;
            self::$data->save();
        }

    }
}
