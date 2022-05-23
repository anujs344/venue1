<?php

namespace App\Repository\Admin;

use Illuminate\Http\Request;
use App\Models\Couple;
use App\Models\WeddingInfo;
use App\Models\vendorlist;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class AdminProfileRepository 
{
    public $vendorlists;
    public $couple_id;
    public $couple_data;

    public function __construct()
    {
        $this->vendorlists = new vendorlist();
    }

    public function postaddlistingvendor(Request $req)
    {
        $imagename = $this->saveimage($req);
        $amenities = $this->mergecheckboxes($req);
        $this->vendorlists->title = $req->title;
        $this->vendorlists->category = $req->category;
        $this->vendorlists->seat_capacity = $req->seat_capacity;
        $this->vendorlists->description = $req->description;
        $this->vendorlists->price = $req->price;
        $this->vendorlists->address = $req->address;
        $this->vendorlists->city = $req->city;
        $this->vendorlists->postcode = $req->postcode;
        $this->vendorlists->state = $req->state;
        $this->vendorlists->country = $req->country;
        $this->vendorlists->latitude = $req->latitude;
        $this->vendorlists->longitude = $req->longitude;
        $this->vendorlists->amenities = $amenities;
        $this->vendorlists->images = $imagename;
        $this->vendorlists->video = $req->video;
        $this->vendorlists->facebook = $req->facebook;
        $this->vendorlists->instagram = $req->instagram;
        $this->vendorlists->youtube = $req->youtube;
        $this->vendorlists->twitter = $req->twitter;
        $this->vendorlists->InsertedBy = "Admin";
        $this->vendorlists->save();
    }
    public function saveimage(Request $req)
    {
        $file = $req->file('image');
        $imagename = time().".".$file->getClientOriginalExtension();
        Storage::disk('public')->putFileAs(
            "vendorlists/Admin", $file,  $imagename
        );
        return $imagename;
    }

    public function mergecheckboxes(Request $req)
    {
        $string = "";
        foreach($req->amenities as $key=>$item)
        {
            if($key == 0)
            {
                $string = $item;
            }
            $string= $string.",".$item;
        }

        return $string;
    }

    
}