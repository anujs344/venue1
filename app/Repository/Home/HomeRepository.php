<?php

namespace App\Repository\Home;

use Illuminate\Http\Request;
use App\Models\vendorlist;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;

class HomeRepository 
{
    public function getvendorcategories($category)
    {
        $vendorcategories = vendorlist::all()->groupBy($category);
        return array_keys($vendorcategories->toArray());

    }

    public function getparticulardetail($name_of_property,$value_of_property,$func)
    {
        return vendorlist::where($name_of_property,$value_of_property)->$func();
    }
}
