<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public static $data,$image,$imageName,$directory,$imageUrl;

    public static function save_package($request)
    {
        self::$data = new Package();
        self::$data->name = $request->name??null;
        self::$data->price = $request->price??null;
        self::$data->options = json_encode($request->options)??null;
        self::$data->add_home = $request->add_home??null;
        self::$data->save();
    }
    public static function update_package($request)
    {
        self::$data = Package::find($request->id);
        self::$data->name = $request->name??null;
        self::$data->price = $request->price??null;
        self::$data->options = json_encode($request->options)??null;
        self::$data->add_home = $request->add_home??null;
        self::$data->status = $request->status??null;
        self::$data->save();
    }

}
