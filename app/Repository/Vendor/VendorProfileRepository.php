<?php

namespace App\Repository\Vendor;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\User;
use App\Models\vendorlist;
use Illuminate\Support\Facades\Hash;
use Auth;

use Illuminate\Support\Facades\Storage;

class VendorProfileRepository 
{
    public $model; 

    public function __construct()
    {
        $this->model = new vendorlist();
    }
    public function getvendordetails()
    {
        $vendordata = Vendor::where('email',Auth::user()->email)->first();
        return $vendordata;
    }

    public function postaddlistingvendor(Request $req)
    {
        $imagename = $this->saveimage($req);
        $amenities = $this->mergecheckboxes($req);
        $vendor_detail = $this->getvendordetails();
        $this->model->title = $req->title;
        $this->model->category = $req->category;
        $this->model->seat_capacity = $req->seat_capacity;
        $this->model->price = $req->price;
        $this->model->address = $req->address;
        $this->model->city = $req->city;
        $this->model->description = $req->description;
        $this->model->postcode = $req->postcode;
        $this->model->state = $req->state;
        $this->model->country = $req->country;
        $this->model->latitude = $req->latitude;
        $this->model->longitude = $req->longitude;
        $this->model->amenities = $amenities;
        $this->model->images = $imagename;
        $this->model->video = $req->video;
        $this->model->facebook = $req->facebook;
        $this->model->instagram = $req->instagram;
        $this->model->youtube = $req->youtube;
        $this->model->twitter = $req->twitter;
        $this->model->vendor_id = $vendor_detail->id;
        $this->model->InsertedBy = "Vendor";
        $this->model->save();
    }

    public function saveimage(Request $req)
    {
        $vendor_detail = $this->getvendordetails();

        $file = $req->file('image');
        $imagename = time().".".$file->getClientOriginalExtension();
        Storage::disk('public')->putFileAs(
            "vendorlists/vendors/".$vendor_detail->id, $file,  $imagename
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

    public function getalllist()
    {
        $vendor_detail = $this->getvendordetails();
        return vendorlist::where('vendor_id',$vendor_detail->id)->get();
    }

}