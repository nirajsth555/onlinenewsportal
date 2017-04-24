<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newsdata;
use App\category;
use DB;
use App\Http\Requests;

class newscontroller extends Controller
{
    //
     public function getNews(){
    	 //$obj= DB::table('newsdatas')->get();
         //$obj= DB::table('newsdatas')->get();
         $obj= DB::table('newsdatas')->select('newsdatas.*','categories.category')->join('categories','newsdatas.category','=','categories.id')->get();
         //dump($obj);
    	// $obj1=DB::select("select fullnews from newsdatas where limit=60 ")
    	//return view('admin.shownews');
    	 return view('admin.shownews',array('result'=>$obj));
    }

     public function getAddnews(){
        $obj=DB::select("select * from categories");
        //dd($obj);
        return view('admin.addnews',array('result'=>$obj));
       // return view('admin.addnews');
    }
        //return view('admin.addnews');
    

     public function postAddnews(Request $request){
        $obj=new newsdata;
        $obj->title=$request->get('title');
        $obj->category=$request->get('category');
        $file= $request->file('image');
        $obj->fullnews=$request->get('fullnews');
        $obj->highlight_sentence=$request->get('highlight');
        $obj->Reporter=$request->get('reporter');
         $filename= $file->getClientOriginalName();
        $location="public/lib/newsimages/";
       
        $file->move($location,$filename);
        $image=$location.$filename;
        $obj->image= $image;
        $result= $obj->save();
        if($result){
            return redirect('news/news');
        }
        else {
            echo "failed";
        }
}

 public function getRemoveheadline($id){
        $obj=newsdata::find($id);
        $obj->status=0;
        $obj->save();
        return redirect('news/news');

    }

    public function getMakeheadline($id){ 
        $obj=newsdata::find($id);
        $obj->status=1;
        $obj->save();
        return redirect('news/news');
    }
}
