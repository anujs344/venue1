<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repository\Admin\AdminAuthRepository;

class AdminAuthController extends Controller
{
    public $repository; 

    public function __construct(AdminAuthRepository $adminAuthRepository)
    {
        $this->repository = $adminAuthRepository;
    }

    public function showauth()
    {
        return view('Admin.adminauth');
    }

    public function login(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($this->repository->checklogin($req))
        {
            return redirect()->route('showadmindashnoard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }
}
