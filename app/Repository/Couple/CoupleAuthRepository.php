<?php

namespace App\Repository\Couple;

use Illuminate\Http\Request;
use App\Models\Couple;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use Carbon\Carbon;

class CoupleAuthRepository 
{
    public $model;
    public $user;


    public function __construct()
    {
        $this->model = new Couple();
        $this->user = new User();
    }

    public function register(Request $req)
    {
        $this->model->name = $req->vendor;
        $this->model->password = Hash::make($req->password);
        $this->model->email = $req->email;
        $this->model->name = $req->name;
        $this->model->wedding_date = Carbon::createFromFormat('d/m/Y', $req->wedding_date);
        $this->model->save();

        $this->user->email = $req->email;
        $this->user->password = Hash::make($req->password);
        $this->user->user_type = 'Couple';
        $this->user->save();
    }

    public function checklogin(Request $req)
    {
        if(Auth::attempt(['email' => $req->email, 'password' => $req->password,'user_type' => "Couple"]))
        {
           
            return true;
        }
         return false;
    }
}