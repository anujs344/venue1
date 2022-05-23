<?php

namespace App\Http\Controllers\Couple;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repository\Couple\CoupleProfileRepository;
use Auth;
use Illuminate\Support\Facades\Session;

class CoupleProfileController extends Controller
{
    public $repository;
   

    public function __construct(CoupleProfileRepository $coupleProfileRepository)
    {
        $this->repository = $coupleProfileRepository;
        
        

    }

    public function editprofile()
    {
        $weddinginformations = $this->repository->weddinginformations();
        $coupledetails = $this->repository->givecoupledetails();
        return view('Couple.editprofile',["weddinginfo" => $weddinginformations,"coupledetails"=>$coupledetails]);
    }


    public function posteditprofile(Request $req)
    {
        $req->validate([
            'image' => 'required',
            'couplename' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'description' => 'required',
        ]);
        $this->repository->posteditprofile($req);

        Session::flash('message', 'Profile Updated'); 
        return redirect()->back();
    }

    public function postcoupleweddinginfo(Request $req)
    {
        $req->validate([
            'date' => 'required',
            'address' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'groomlname' => 'required',
            'groomfname' => 'required',
            'bridelname'=> 'required',
            'bridefname' => 'required',
        ]);
        $this->repository->postcoupleweddinginfo($req);

        Session::flash('message', 'Info Updated'); 
        return redirect()->back();
    }

    public function postchangecouplepassword(Request $req)
    {
        $req->validate([
            'currentpassword' => 'required',
            'newpassword' => 'required'
        ]);
        

        if($this->repository->postchangecouplepassword($req))
        {
            Session::flash('message', 'Password Updated'); 
        }
        else{
            Session::flash('message', 'Please Enter Correct Password'); 
        }

        return redirect()->back();
    }

    public function listsingleview2()
    {
        return view('Couple.list-single-2');
    }

    public function addlistingcouple()
    {
        return view('Couple.add-listing');
    }
}
