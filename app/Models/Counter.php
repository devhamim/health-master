<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory;
    public static $data;
    public static function saveCounter($request)
    {
//        dd($request);
        if($request->id){
            self::$data = Counter::find($request->id);
            self::$data->doctors =$request->doctors;
            self::$data->services =$request->services;
            self::$data->clients =$request->clients;
            self::$data->awards =$request->awards;
            self::$data->save();
        }
        else{
            self::$data = new Counter();
            self::$data->doctors =$request->doctors;
            self::$data->services =$request->services;
            self::$data->clients =$request->clients;
            self::$data->awards =$request->awards;
            self::$data->save();
        }

    }
    //save  end
}
