<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    public static $data,$image,$imageName,$directory,$imageUrl;

    public static function saveBanner($request)
    {
        self::$data = new Banner();
        self::$data->title = $request->title??null;
        self::$data->short_details = $request->short_details??null;
        self::$data->image1 = self::saveImage1($request);
        self::$data->image2 = self::saveImage2($request);
        self::$data->save();
    }
    public static function updateBanner($request)
    {

        self::$data = Banner::find($request->id);
        self::$data->title = $request->title??null;
        self::$data->short_details = $request->short_details??null;
        if($request->file('image1')){
            if(self::$data->image1){
                if(file_exists(self::$data->image1)){
                    unlink(self::$data->image1);
                    self::$data->image1 = self::saveImage1($request);
                }
            }
            else{
                self::$data->image1 = self::saveImage1($request);
            }
        }
        if($request->file('image2')){
            if(self::$data->image2){
                if(file_exists(self::$data->image2)){
                    unlink(self::$data->image2);
                    self::$data->image2 = self::saveImage2($request);
                }
            }
            else{
                self::$data->image2 = self::saveImage2($request);
            }
        }
        self::$data->save();
    }

    private static function saveImage1($request){
        self::$image = $request->file('image1');
        self::$imageName = 'banner-'.rand().'.'. self::$image->Extension();
        self::$directory = 'website-banner/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }
    private static function saveImage2($request){
        self::$image = $request->file('image2');
        self::$imageName = 'banner-'.rand().'.'. self::$image->Extension();
        self::$directory = 'website-banner/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }

}
