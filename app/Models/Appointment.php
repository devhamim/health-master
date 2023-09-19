<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    public static $data,$image,$imageName,$directory,$imageUrl;

    public static function save_appointment($request)
    {
        self::$data = new Appointment();
        self::$data->name = $request->name ?? null;
        self::$data->number = $request->number ?? null;
        self::$data->email = $request->email ?? null;
        self::$data->service_id = $request->service_id ?? null;
        self::$data->date = $request->date ?? null;
        self::$data->select_time = $request->select_time ?? null;
        self::$data->save();
    }
}
