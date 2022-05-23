<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Repository\Vendor\VendorAuthRepository;
use Illuminate\Http\Request;

class VendorAuthController extends Controller
{
    public $repository; 

    public function __construct(VendorAuthRepository $vendorAuthRepository)
    {
        $this->repository = $vendorAuthRepository;
    }

    public function showauth()
    {
        return view('Vendor.authvendor');
    }

    public function register(Request $req)
    {
        $req->validate([
            'vendor' => 'required',
            'password' => 'required|min:8',
            'email' => 'required|unique:Vendors,email|email',
            'username' => 'required',
            'bussiness_name' => 'required',
        ]);

        $this->repository->register($req);

        return redirect()->route('showauthvendor');
    }

    public function login(Request $req)
    {
        $req->validate([
            'password' => 'required|min:8',
            'username' => 'required',
        ]);

        if($this->repository->checklogin($req))
        {
            return redirect()->route('showvendoroverview');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');


    }
}
