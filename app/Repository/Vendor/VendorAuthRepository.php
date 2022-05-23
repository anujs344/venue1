<?php

namespace App\Repository\Vendor;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;

class VendorAuthRepository 
{
    public $model;
    public $user;


    public function __construct()
    {
        $this->model = new Vendor();
        $this->user = new User();
    }

    public function register(Request $req)
    {
        $this->model->vendor_type = $req->vendor;
        $this->model->password = Hash::make($req->password);
        $this->model->email = $req->email;
        $this->model->username = $req->username;
        $this->model->bussiness_name = $req->bussiness_name;
        $this->model->save();

        $this->user->email = $req->email;
        $this->user->password = Hash::make($req->password);
        $this->user->user_type = 'Vendor';
        $this->user->save();
    }

    public function checklogin(Request $req)
    {
        if(Auth::attempt(['email' => $req->username, 'password' => $req->password, 'user_type' => "Vendor"]))
        {
            return true;
        }
         return false;
    }
}
