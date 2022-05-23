<?php

namespace App\Http\Controllers\Couple;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\Couple\CoupleAuthRepository;


class CoupleAuthController extends Controller
{

    public $repository; 

    public function __construct(CoupleAuthRepository $coupleAuthRepository)
    {
        $this->repository = $coupleAuthRepository;
    }

    public function showauth(){
        return view('Couple.authcouple');
    }

    public function register(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'password' => 'required|min:8',
            'email' => 'required|unique:Vendors,email|email',
            'wedding_date' => 'required'
        ]);

        $this->repository->register($req);

        return redirect()->route('showauthcouple');
    }

    public function login(Request $req)
    {
        $req->validate([
            'password' => 'required|min:8',
            'email' => 'required',
        ]);

        if($this->repository->checklogin($req))
        {
            return redirect()->route('showcoupleeditprofile');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');


    }
}
