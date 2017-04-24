<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\headlinenews;
use App\newsdata;
use DB;

use App\Http\Requests;

class headline extends Controller
{
    //
    public function getShowheadline(){
        $obj= DB::table('newsdatas')->select('newsdatas.*','categories.category')->join('categories','newsdatas.category','=','categories.id')->where([['newsdatas.status','=','1'],])->get();
        //$obj=DB::table('newsdatas')->where([['newsdatas.status','=','1'],])->get();
    	//return view('admin.showheadline');
        return view('admin.showheadline',array('result'=>$obj));
    }

    //public function getAddheadline(){
    	 //$obj=DB::select("select * from categories where status='1'");
        //dd($obj);
        //return view('admin.addheadline',array('result'=>$obj));
    //}

   // public function postAddheadline(Request $request){

    	//$obj=new headlinenews();
    	//$obj=new newsdata();
    	//$obj2=new newsdata();
    	//$obj->title=$request->get('title');

        //$obj->category=$request->get('category');
        //$file= $request->file('image');
        //$obj->fullnews=$request->get('fullnews');
         //$filename= $file->getClientOriginalName();
        //$location="lib/newsimages/";
       
        //$file->move($location,$filename);
        //$image=$location.$filename;
        //$obj->image= $image;
        //$result= $obj->save();

        //$c_id=DB::getPdo()->lastinsertid();     //eutai data 2ueta table ma ekai choti store garna ko lahi

        //$obj2=new newsdata();
        //$obj2->id=$c_id;
        //$obj2->title=$request->input('title');
        //$obj2->category=$request->get('category');
        //$file= $request->file('image');
        //$obj2->fullnews=$request->get('fullnews');
         //$filename= $file->getClientOriginalName();
        //$location="lib/newsimages/";
       
        //$file->move($location,$filename);
        //$image=$location.$filename;
        //$obj2->image= $image;

        //if($result){
            //return redirect('news/news');
        //}
        //else {
           // echo "failed";
        //}
//}

    }

