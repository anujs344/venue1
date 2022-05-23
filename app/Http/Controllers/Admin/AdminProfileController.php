<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\Admin\AdminProfileRepository;
use Illuminate\Support\Facades\Session;


class AdminProfileController extends Controller
{
    public $repository; 

    public function __construct(AdminProfileRepository $adminprofileRepository)
    {
        $this->repository = $adminprofileRepository;
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function editprofileadmin()
    {
        return view('admin.editprofile');
    }

    


    public function addlistingadmin()
    {
        return view('admin.add-listing');
    }

    public function postaddlistingadmin(Request $req)
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
