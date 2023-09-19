<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    public static $data,$image,$imageName,$directory,$imageUrl;

    public static function save_service($request)
    {
        if($request->id){
            self::$data = About::find($request->id);
                if(self::$data->image1){
                    if(file_exists(self::$data->image1)){
                        unlink(self::$data->image1);
                        self::$data->image1 = self::saveAboutImage1($request);
                    }
                }
                else{
                    self::$data->image1 = self::saveAboutImage1($request);
                }

                if(self::$data->image2){
                    if(file_exists(self::$data->image2)){
                        unlink(self::$data->image2);
                        self::$data->image2 = self::saveAboutImage2($request);
                    }
                }
                else{
                    self::$data->image2 = self::saveAboutImage2($request);
                }



                if(self::$data->banner_image){
                    if(file_exists(self::$data->banner_image)){
                        unlink(self::$data->banner_image);
                        self::$data->banner_image = self::saveBannerImage($request);
                    }
                }
                else{
                    self::$data->banner_image = self::saveBannerImage($request);
                }
        }
        else{
            self::$data = new About();
            self::$data->image1 = self::saveAboutImage1($request);
            self::$data->image2 = self::saveAboutImage2($request);
            self::$data->banner_image = self::saveBannerImage($request);
        }
        self::$data->title = $request->title;
        self::$data->page_details = $request->page_details;
        self::$data->details1 = $request->details1;
        self::$data->details2 = $request->details2;
        self::$data->details3 = $request->details3;
        self::$data->details4 = $request->details4;

        self::$data->save();
    }
    public static function update_service($request)
    {
        self::$data = About::find($request->id);
        self::$data->title = $request->title;
        self::$data->page_details = $request->page_details;
        self::$data->details1 = $request->details1;
        self::$data->details2 = $request->details2;
        self::$data->details3 = $request->details3;
        self::$data->details4 = $request->details4;
        if($request->file('image1')){
            if(self::$data->image1){
                if(file_exists(self::$data->image1)){
                    unlink(self::$data->image1);
                    self::$data->image1 = self::saveAboutImage1($request);
                }
            }
            else{
                self::$data->image1 = self::saveAboutImage1($request);
            }
        }
        if($request->file('image2')){
            if(self::$data->image2){
                if(file_exists(self::$data->image2)){
                    unlink(self::$data->image2);
                    self::$data->image2 = self::saveAboutImage2($request);
                }
            }
            else{
                self::$data->image2 = self::saveAboutImage2($request);
            }
        }

        if($request->file('banner_image')){
            if(self::$data->banner_image){
                if(file_exists(self::$data->banner_image)){
                    unlink(self::$data->banner_image);
                    self::$data->banner_image = self::saveBannerImage($request);
                }
            }
            else{
                self::$data->banner_image = self::saveBannerImage($request);
            }
        }

        self::$data->save();
    }

    private static function saveAboutImage1($request){
        self::$image = $request->file('image1');
        self::$imageName = 'about_image-'.rand().'.'. self::$image->Extension();
        self::$directory = 'About/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }

    private static function saveAboutImage2($request){
        self::$image = $request->file('image2');
        self::$imageName = 'about_image-'.rand().'.'. self::$image->Extension();
        self::$directory = 'About/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }
    private static function saveBannerImage($request){
        self::$image = $request->file('banner_image');
        self::$imageName = 'about_banner_image-'.rand().'.'. self::$image->Extension();
        self::$directory = 'About/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }
}
