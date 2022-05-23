<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\Home\HomeRepository;

class HomeController extends Controller
{
    public $homeRepository;
    public function __construct(HomeRepository $homeRepository)
    {
        $this->homeRepository = $homeRepository;
    }

    public function index()
    {
        $vendorcategories = $this->homeRepository->getvendorcategories("category");

        return view('welcome',['vendorcategories'=>$vendorcategories]);
    }
    public function showvendorcategory()
    {
        $vendorcategories = $this->homeRepository->getvendorcategories("category");
        
        return view('vendorcategory',['vendorcategories'=>$vendorcategories]);
    }

    public function showvendorlocation ()
    {
        $vendorlocation = $this->homeRepository->getvendorcategories("city");

        return view('vendorlocation',['vendorlocation'=>$vendorlocation]);
    }

    public function showsingleviewcategory($type)
    {
        $particularcategory = $this->homeRepository->getparticulardetail("category",$type,"get");
        return view('viewsinglecategory',['particularcategory'=>$particularcategory]);
    }

    public function showsingleviewclocation($type)
    {
        $particularcategory = $this->homeRepository->getparticulardetail("city",$type,"get");
        return view('viewsinglelocation',['particularcategory'=>$particularcategory]);
    }

    public function showparticularlocation($id)
    {
        $singlecategory = $this->homeRepository->getparticulardetail("id",$id,"first");
        return view('viewparticularlocation',['singlecategory'=>$singlecategory]);
    }
    
    public function showparticularcategory($id)
    {
        $singlecategory = $this->homeRepository->getparticulardetail("id",$id,"first");
        return view('viewparticularcategory',['singlecategory'=>$singlecategory]);   
    }

}
