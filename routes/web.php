<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\AppointmentInfoController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\BannerAndTitleController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\WebsiteSettingsController;
use App\Http\Controllers\GalleryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[WebsiteController::class,'home'])->name('front.page');
Route::get('/services-details/{id}', [WebsiteController::class, 'services_details'])->name('services.details');
Route::get('/all-services', [WebsiteController::class, 'all_details'])->name('services');
Route::get('/about-page', [WebsiteController::class, 'about_page'])->name('about.page');
Route::get('/team-page', [WebsiteController::class, 'team_page'])->name('team.page');
Route::get('/management-page', [WebsiteController::class, 'management_page'])->name('management.page');
Route::get('/testimonial-page', [WebsiteController::class, 'testimonial_page'])->name('testimonial.page');
Route::get('/appointment-page', [WebsiteController::class, 'appointment_page'])->name('appointment.page');
Route::get('/package-page', [WebsiteController::class, 'package_page'])->name('package.page');
Route::get('/blogs-page', [WebsiteController::class, 'blogs_page'])->name('blogs.page');
Route::get('/blogs-details/{id}', [WebsiteController::class, 'blogs_details'])->name('blogs.details');
Route::get('/contacts', [WebsiteController::class, 'contacts'])->name('contacts');
Route::get('/gallery-page', [WebsiteController::class, 'gallery_page'])->name('gallery.page');
Route::get('/video-gallery-page', [WebsiteController::class, 'video_gallery_page'])->name('video.gallery.page');

//appointment start
Route::post('/appointment', [WebsiteSettingsController::class, 'appointment'])->name('appointment');
//appointment end

//appointment start
Route::post('/contact', [WebsiteSettingsController::class, 'contact'])->name('contact');
//appointment end

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

//service start
Route::get('/add-services', [ServiceController::class, 'add_services'])->name('add.services')->middleware('is_admin');
Route::post('/store-services', [ServiceController::class, 'store_services'])->name('store.services')->middleware('is_admin');
Route::get('/edit-services/{id}', [ServiceController::class, 'edit_services'])->name('edit.services')->middleware('is_admin');
Route::post('/update-services', [ServiceController::class, 'update_services'])->name('update.services')->middleware('is_admin');
//service end

//photo gallery start
Route::get('/add-gallery', [GalleryController::class, 'tech_web_add_gallery'])->name('add.gallery')->middleware('is_admin');
Route::post('/store-gallery', [GalleryController::class, 'tech_web_store_gallery'])->name('store.gallery')->middleware('is_admin');
Route::get('/edit-gallery/{id}', [GalleryController::class, 'tech_web_edit_gallery'])->name('edit.gallery')->middleware('is_admin');
Route::post('/update-gallery', [GalleryController::class, 'tech_web_update_gallery'])->name('update.gallery')->middleware('is_admin');
//photo gallery end

//video gallery start
Route::get('/add-video-gallery', [GalleryController::class, 'tech_web_add_video_gallery'])->name('add.video.gallery')->middleware('is_admin');
Route::post('/store-video-gallery', [GalleryController::class, 'tech_web_store_video_gallery'])->name('store.video.gallery')->middleware('is_admin');
Route::get('/edit-video-gallery/{id}', [GalleryController::class, 'tech_web_edit_video_gallery'])->name('edit.video.gallery')->middleware('is_admin');
Route::post('/update-video-gallery', [GalleryController::class, 'tech_web_update_video_gallery'])->name('update.video.gallery')->middleware('is_admin');
//video gallery end

//about start
Route::get('/add-about', [AboutController::class, 'add_about'])->name('add.about')->middleware('is_admin');
Route::post('/store-about', [AboutController::class, 'store_about'])->name('store.about')->middleware('is_admin');
Route::get('/edit-about/{id}', [AboutController::class, 'edit_about'])->name('edit.about')->middleware('is_admin');
Route::post('/update-about', [AboutController::class, 'update_about'])->name('update.about')->middleware('is_admin');
//about end

//team start
Route::get('/add-team', [TeamController::class, 'add_team'])->name('add.team')->middleware('is_admin');
Route::post('/store-team', [TeamController::class, 'store_team'])->name('store.team')->middleware('is_admin');
Route::get('/edit-team/{id}', [TeamController::class, 'edit_team'])->name('edit.team')->middleware('is_admin');
Route::post('/update-team', [TeamController::class, 'update_team'])->name('update.team')->middleware('is_admin');
//team end

//testimonial start
Route::get('/add-testimonial', [TestimonialController::class, 'add_testimonial'])->name('add.testimonial')->middleware('is_admin');
Route::post('/store-testimonial', [TestimonialController::class, 'store_testimonial'])->name('store.testimonial')->middleware('is_admin');
Route::get('/edit-testimonial/{id}', [TestimonialController::class, 'edit_testimonial'])->name('edit.testimonial')->middleware('is_admin');
Route::post('/update-testimonial', [TestimonialController::class, 'update_testimonial'])->name('update.testimonial')->middleware('is_admin');
//testimonial end

//Appointment info start
Route::get('/add-appointment-info', [AppointmentInfoController::class, 'add_appointment_info'])->name('add.appointment.info')->middleware('is_admin');
Route::post('/store-appointment-info', [AppointmentInfoController::class, 'store_appointment_info'])->name('store.appointment.info')->middleware('is_admin');
Route::get('/edit-appointment-info/{id}', [AppointmentInfoController::class, 'edit_appointment_info'])->name('edit.appointment.info')->middleware('is_admin');
Route::post('/update-appointment-info', [AppointmentInfoController::class, 'update_appointment_info'])->name('update.appointment.info')->middleware('is_admin');
//Appointment info end


//package start
Route::get('/add-package', [PackageController::class, 'add_package'])->name('add.package')->middleware('is_admin');
Route::post('/store-package', [PackageController::class, 'store_package'])->name('store.package')->middleware('is_admin');
Route::get('/edit-package/{id}', [PackageController::class, 'edit_package'])->name('edit.package')->middleware('is_admin');
Route::post('/update-package', [PackageController::class, 'update_package'])->name('update.package')->middleware('is_admin');
//package end

//Blogs start
Route::get('/add-blogs', [BlogController::class, 'add_blogs'])->name('add.blogs')->middleware('is_admin');
Route::post('/store-blogs', [BlogController::class, 'store_blogs'])->name('store.blogs')->middleware('is_admin');
Route::get('/edit-blogs/{id}', [BlogController::class, 'edit_blogs'])->name('edit.blogs')->middleware('is_admin');
Route::post('/update-blogs', [BlogController::class, 'update_blogs'])->name('update.blogs')->middleware('is_admin');
//Blogs end

//Management start
Route::get('/add-management', [ManagementController::class, 'add_management'])->name('add.management')->middleware('is_admin');
Route::post('/store-management', [ManagementController::class, 'store_management'])->name('store.management')->middleware('is_admin');
Route::get('/edit-management/{id}', [ManagementController::class, 'edit_management'])->name('edit.management')->middleware('is_admin');
Route::post('/update-management', [ManagementController::class, 'update_management'])->name('update.management')->middleware('is_admin');
//Management end

//Banner and Tile
Route::post('/store-banner-title', [BannerAndTitleController::class, 'store_banner_tile'])->name('store.banner.title')->middleware('is_admin');
Route::get('/edit-banner-title/{id}', [BannerAndTitleController::class, 'edit_banner_tile'])->name('edit.banner.title')->middleware('is_admin');
Route::post('/update-banner-title/{id}', [BannerAndTitleController::class, 'update_banner_tile'])->name('update.banner.title')->middleware('is_admin');
//Banner and title

//Logo start
Route::post('/store-logo', [WebsiteSettingsController::class, 'store_logo'])->name('store.logo')->middleware('is_admin');
//Logo end

//links start
Route::post('/store-links', [WebsiteSettingsController::class, 'store_links'])->name('store.links')->middleware('is_admin');
//Links end

//counter start
Route::post('/store-counter', [WebsiteSettingsController::class, 'store_counter'])->name('store.counter')->middleware('is_admin');
//counter end

//footer start
Route::post('/store-footer', [WebsiteSettingsController::class, 'store_footer'])->name('store.footer')->middleware('is_admin');

//footer end

//banner start
Route::post('/store-main-banner', [WebsiteSettingsController::class, 'store_main_banner'])->name('store.main.banner')->middleware('is_admin');
Route::get('/edit-main-banner/{id}', [WebsiteSettingsController::class, 'edit_main_banner'])->name('edit.main.banner')->middleware('is_admin');
Route::post('/update-main-banner/{id}', [WebsiteSettingsController::class, 'update_main_banner'])->name('update.main.banner')->middleware('is_admin');
//banner end




//general settings start
Route::get('/general-settings', [GeneralController::class, 'general_settings'])->name('general.settings')->middleware('is_admin');
//general settings end

//profile settings start
Route::get('/profile-settings', [GeneralController::class, 'profile_settings'])->name('profile.settings')->middleware('is_admin');
Route::post('/update-profile', [GeneralController::class, 'update_profile'])->name('update.profile')->middleware('is_admin');
//profile settings end

