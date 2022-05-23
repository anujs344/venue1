<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vendor\VendorAuthController;
use App\Http\Controllers\Vendor\VendorProfileController;
use App\Http\Controllers\Couple\CoupleAuthController;
use App\Http\Controllers\Couple\CoupleProfileController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Home\HomeController;


Route::get('/',[HomeController::class,'index']);


Route::prefix('home')->group(function(){
    Route::controller(HomeController::class)->group(function(){
        Route::prefix('category')->group(function(){
            Route::get('/','showvendorcategory')->name('showvendorcategory');
            Route::get('view/{type}','showsingleviewcategory')->name('showsingleviewcategory');
            Route::get('show/{id}','showparticularcategory')->name('showparticularcategory');
        });
        Route::prefix('location')->group(function(){
            Route::get('/','showvendorlocation')->name('showvendorlocation');
            Route::get('view/{type}','showsingleviewclocation')->name('showsingleviewlocation');
            Route::get('show/{id}','showparticularlocation')->name('showparticularlocation');
        });
        
    });
});

//Route for vendor

Route::prefix('vendor')->group(function(){
    
    
    Route::controller(VendorAuthController::class)->group(function(){
       
        
        Route::middleware('loginregister')->group(function () {
            Route::get('auth','showauth')->name('showauthvendor');
            Route::post('register','register')->name('registervendor');
            Route::post('login','login')->name('vendorlogin');
        });

        
    });
        
    Route::middleware('checkauth')->group(function () {
            
        
        Route::controller(VendorProfileController::class)->group(function(){
                
            Route::get('overview','showoverview')->name('showvendoroverview');
            
                
            Route::get('listing','showlistingvendor')->name('showlistingvendor');
                
            Route::get('addlisting','addlistingvendor')->name('addlistingvendor');
            Route::post('addlisting','postaddlistingvendor')->name('postaddlistingvendor');
                
            Route::get('logoutvendor',function(){
                    Auth::logout();
                    return redirect('/');
                })->name('logoutvendor');

            });
            
        });
    
});

Route::prefix('couple')->group(function(){
    
    Route::controller(CoupleAuthController::class)->group(function(){
        
        
        
        Route::middleware(['loginregister'])->group(function () {
            Route::get('auth','showauth')->name('showauthcouple');
            Route::post('register','register')->name('registercouple');
            Route::post('login','login')->name('couplelogin');
        });
       
    });

    Route::middleware('checkauth')->group(function () {
        
        Route::controller(CoupleProfileController::class)->group(function(){
            
            Route::get('editprofile','editprofile')->name('showcoupleeditprofile');
            
            Route::post('editprofile','posteditprofile')->name('postcoupleeditprofile');
            Route::post('coupleweddinginfo','postcoupleweddinginfo')->name('postcoupleweddinginfo');
            Route::post('changecouplepassword','postchangecouplepassword')->name('postchangecouplepassword');
            Route::post('deletecoupleaccount','postdeletecoupleaccount')->name('postdeletecoupleaccount');
            
            Route::get('listing','listsingleview2')->name('showlistingcouple');
            
            Route::get('addlisting','addlistingcouple')->name('addlistingcouple');
            
            Route::get('logoutcouple',function(){
                Auth::logout();
                return redirect('/');
            })->name('logoutcouple');

        });
        
    });
});

Route::prefix('admin')->group(function(){
    Route::controller(AdminAuthController::class)->group(function(){

        Route::middleware(['loginregister'])->group(function () {

            Route::get('auth','showauth')->name('showauthadmin');
            Route::post('login','login')->name('adminlogin');

        });
        
    });

    Route::middleware('checkauth')->group(function () {
        Route::controller(AdminProfileController::class)->group(function(){
            Route::get('dashboard','dashboard')->name('showadmindashnoard');

            Route::get('editprofile','editprofileadmin')->name('editprofileadmin');

            Route::get('addlisting','addlistingadmin')->name('addlistingadmin');
            Route::post('addlisting','postaddlistingadmin')->name('postaddlistingadmin');

            Route::get('addbooking','addbookingadmin')->name('addbookingadmin');

            Route::get('logoutadmin',function(){
                Auth::logout();
                return redirect('/');
            })->name('logoutadmin');

        });
        
    });
});
