<?php

namespace App\Repository\Admin;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use Carbon\Carbon;

class AdminAuthRepository 
{
    public $model;
    public $user;


    public function __construct()
    {
        $this->model = new Admin();
        $this->user = new User();
    }

    public function checklogin(Request $req)
    {
        if(Auth::attempt(['email' => $req->email, 'password' => $req->password,'user_type' => "Admin"]))
        { 
            return true;
        }
         return false;
    }
}