<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\Vendor\VendorProfileRepository;
use Auth;
use Illuminate\Support\Facades\Session;

class VendorProfileController extends Controller
{
    public $repository;

    public function __construct(VendorProfileRepository $vendorProfileRepository)
    {
        $this->repository = $vendorProfileRepository;
        

    }

    public function showoverview()
    {
        $vendordetails = $this->repository->getvendordetails();
        return view('Vendor.overview',["vendordetails"=>$vendordetails]);
    }

    public function showlistingvendor()
    {
        $vendordetails = $this->repository->getvendordetails();
        $getalllist = $this->repository->getalllist();
        return view('Vendor.listing',["vendordetails"=>$vendordetails,"getalllist"=>$getalllist]);
    }

    public function addlistingvendor()
    {
        $vendordetails = $this->repository->getvendordetails();
        return view('Vendor.add-listing',["vendordetails"=>$vendordetails]);
    }

    public function postaddlistingvendor(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'category' => 'required',
            'seat_capacity' => 'required',
            'description' => 'required',
            'price' => 'required',
            'address' => 'required',
            'city' => 'required',
            'postcode' => 'required',
            'state' => 'required',
            'country' => 'required',
            'amenities' => 'required',
            'image' => 'required',
        ]);

        $this->repository->postaddlistingvendor($req);

        Session::flash('message', 'List Has Been Added'); 

        return redirect()->back();
    }
}
