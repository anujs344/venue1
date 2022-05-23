<?php

namespace App\Repository\Couple;

use Illuminate\Http\Request;
use App\Models\Couple;
use App\Models\WeddingInfo;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class CoupleProfileRepository 
{
    public $model;
    public $couple_id;
    public $couple_data;

    public function __construct()
    {
        $this->model = new WeddingInfo();
        // $this->couple_id = $this->findcoupleid(Auth::user()->email);
        // $this->couple_data = Couple::where('email',Auth::user()->email)->first();
    }

    public function posteditprofile(Request $req)
    {
        
        $this->couple_id = $this->findcoupleid(Auth::user()->email);
        $oldata = WeddingInfo::where('couple_id',$this->couple_id)->exists();

        $imagename = $this->saveimage($req);
        if(!$oldata)
        {
            $this->model->image = $imagename;
            $this->model->couplename = $req->couplename;
            $this->model->email = $req->email;
            $this->model->phone = $req->phone;
            $this->model->description = $req->description;
            $this->model->facebook = $req->facebook;
            $this->model->youtube = $req->youtube;
            $this->model->instagram = $req->instagram;
            $this->model->twitter = $req->twitter;
            $this->model->couple_id = $this->couple_id;
            $this->model->save();
        }
        else{
            WeddingInfo::where('couple_id',$this->couple_id)->update([
                'couplename' => $req->couplename,
                'image' => $imagename,
                'email' => $req->email,
                'phone' => $req->phone,
                'description' => $req->description,
                'facebook' => $req->facebook,
                'youtube' =>$req->youtube,
                'instagram' =>$req->instagram,
                'twitter' => $req->twitter,
            ]);
        }
        


    }

    public function postcoupleweddinginfo(Request $req)
    {
        $this->couple_id = $this->findcoupleid(Auth::user()->email);
        $oldata = WeddingInfo::where('couple_id',$this->couple_id)->exists();
        
                if(!$oldata)
                {
                    $this->couple_id = $this->findcoupleid(Auth::user()->email);
                    $this->model->wedding_date = Carbon::createFromFormat('d/m/Y', $req->date);
                    $this->model->wedding_address = $req->address;
                    $this->model->country = $req->country;
                    $this->model->state = $req->state;
                    $this->model->city = $req->city;
                    $this->model->bride_first_name = $req->bridefname;
                    $this->model->groom_first_name = $req->bridelname;
                    $this->model->bride_last_name = $req->groomfname;
                    $this->model->groom_last_name = $req->groomlname;
                    $this->model->couple_id = $this->couple_id;
                    $this->model->save();
                }
                else{
                    WeddingInfo::where('couple_id',$this->couple_id)->update([
                        'wedding_date' => Carbon::createFromFormat('d/m/Y', $req->date),
                        'wedding_address' => $req->address,
                        'country' => $req->country,
                        'state' => $req->state,
                        'city' => $req->city,
                        'bride_first_name' => $req->bridefname,
                        'bride_last_name' =>$req->bridelname,
                        'groom_first_name' =>$req->groomfname,
                        'groom_last_name' => $req->groomlname,
                    ]);
                }
        

    }

    public function saveimage(Request $req)
    {
        $file = $req->file('image');
        $imagename = time().".".$file->getClientOriginalExtension();
        Storage::disk('public')->putFileAs(
            Auth::user()->email, $file,  $imagename
        );
        return $imagename;
    }

    public function findcoupleid($email)
    {
        $data = Couple::where('email',$email)->first();
        return $data->id;
    }

    public function weddinginformations()
    {
        $this->couple_data = Couple::where('email',Auth::user()->email)->first();
        $this->couple_id = $this->findcoupleid($this->couple_data->email);
        $weddinginfo = WeddingInfo::where('couple_id',$this->couple_id)->first();
        return $weddinginfo;   
    }

    public function postchangecouplepassword(Request $req)
    {
        $same = Hash::check($req->currentpassword, Auth::user()->password);
        if($same)
        {
            $this->couple_data = Couple::where('email',Auth::user()->email)->first();
            $this->couple_id = $this->findcoupleid($this->couple_data->email);
            User::where('email',Auth::user()->email)->update([
                'password' => Hash::make($req->newpassword)
            ]);
            Couple::where('id',$this->couple_id)->update([
                'password' => Hash::make('$req->password')
            ]);
            return true;
        }
        return false;
        
    }
    public function givecoupledetails()
    {
        $this->couple_data = Couple::where('email',Auth::user()->email)->first();
        return $this->couple_data;
    }
}