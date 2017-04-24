<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\advert;
use App\Http\Requests;
use DB;

class advertisementcontroller extends Controller
{
    //
    public function getShowadvertisement(){
        $obj=DB::table('adverts')->get();
    	return view('admin.showadvertisement',array('advert'=>$obj));
    }

    public function getAddadvertisement(){
    	return view('admin.addadvertisement');
    }

    public function postAddadvertisement(Request $request){


    	$obj= new advert;
        $giffile=$request->file('image');
       $obj->adsite=$request->get('adsite');
        $filename= $giffile->getClientOriginalName();
        $location="public/lib/advertisements/";
       
        $giffile->move($location,$filename);
        $image=$location.$filename;
        $obj->giffile= $image;
        $result= $obj->save();
        if($result){
            return redirect('advertisemnet/showadvertisement');
        }
        else {
            echo "failed";
        }
}

    }

