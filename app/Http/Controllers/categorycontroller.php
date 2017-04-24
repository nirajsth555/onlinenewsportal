<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;

class categorycontroller extends Controller
{
    //
     public function getShowcategory(){
    	$obj= category::all();
    	return view('admin.showcategory',array('result'=>$obj));
    	//return view('admin.showcategory');
    }

    public function getAddcategory(){
        return view('admin.addcategory');

    }

     public function postAddcategory(Request $request){

    	$form= new category;
    	$form->category=$request->get('category');
    	$result=$form->save();
    	if($result){
    		return redirect('category/showcategory');
    	}

    }


    public function getEdit($id){

    	$obj=category::find($id);
    	return view('admin.editcategory',array('result'=>$obj));
    }

    public function postEdit($id){
    	$obj= category::find($id);
    	$obj->category=Input::get('category');
        
    	$obj->save();
    	return redirect('category/showcategory');
    }

    public function getDelete($id){
    	$obj=category::find($id);
    	$obj->delete();
    	return redirect('category/showcategory');
    }
    public function getDisable($id){
        $obj=category::find($id);
        $obj->status=0;
        $obj->save();
        return redirect('category/showcategory');

    }

    public function getEnable($id){ 
    	$obj=category::find($id);
        $obj->status=1;
        $obj->save();
        return redirect('category/showcategory');
    }


}
