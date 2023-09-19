<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoGallery extends Model
{
    use HasFactory;
    public static $data,$image,$imageName,$directory,$imageUrl;

    public static function save_gallery($request)
    {
        self::$data = new VideoGallery();
        self::$data->video_link = $request->video_link??null;
        self::$data->save();
    }
    public static function update_gallery($request)
    {
        self::$data = VideoGallery::find($request->id);
        self::$data->video_link = $request->video_link??null;
        self::$data->status = $request->status??null;
        self::$data->save();
    }
}
