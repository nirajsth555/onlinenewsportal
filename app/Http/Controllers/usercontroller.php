<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\newsdata;
use App\feedback;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use Validator;
use App\category;
use App\subscriber;
use App\Http\Requests;
use App\advert;

class usercontroller extends Controller
{
    //
    public function getIndex(){
    	$obj=DB::select("select * from newsdatas where status=1");
        $national=DB::table('newsdatas')->where('category','=','6')->orderBy('created_at','desc')->skip(1)->take(4)->get(); //yesle chahi national category ma last ko lai chodera sabai lai dekhauxa
        $national2=DB::table('newsdatas')->where('category','=','6')->orderBy('created_at','desc')->take(1)->get(); //yesle chahi first ko matra dekhauxa national category ko
        $world=DB::table('newsdatas')->where('category','=','7')->orderBy('created_at','desc')->skip(1)->take(4)->get();
        $world2=DB::table('newsdatas')->where('category','=','7')->orderBy('created_at','desc')->take(1)->get();
    
        $politics=DB::table('newsdatas')->where('category','=','8')->orderBy('created_at','desc')->skip(1)->take(4)->get();
        $politics2=DB::table('newsdatas')->where('category','=','8')->orderBy('created_at','desc')->take(1)->get();
        
        $economy=DB::table('newsdatas')->where('category','=','9')->orderBy('created_at','desc')->skip(1)->take(4)->get();
        $economy2=DB::table('newsdatas')->where('category','=','9')->orderBy('created_at','desc')->take(1)->get();
      
        $sports=DB::table('newsdatas')->where('category','=','10')->orderBy('created_at','desc')->skip(1)->take(4)->get();
        $sports2=DB::table('newsdatas')->where('category','=','10')->orderBy('created_at','desc')->take(1)->get();
      
        $obj2=DB::table('newsdatas')->orderBy('created_at','desc')->take(5)->get();
        $latest_news=DB::table('newsdatas')->orderBy('created_at','desc')->take(8)->get();
        //$current_date=Carbon::now()->toDayDateTimeString();
        $current_date=Carbon::now()->format('l jS \\of F Y h:i:s A');

         $menu=DB::select("select * from categories where status='1'");
         $dropdown=DB::select("select * from categories where status='0'");
         $categorylinks=DB::select("select * from categories");

         $menu1=DB::table('categories')->orderBy('created_at','asc')->take(1)->get();
         $menu2=DB::table('categories')->orderBy('created_at','asc')->skip(1)->take(1)->first();
         $menu3=DB::table('categories')->orderBy('created_at','asc')->skip(2)->take(1)->first();
         $menu4=DB::table('categories')->orderBy('created_at','asc')->skip(3)->take(1)->first();
         $menu5=DB::table('categories')->orderBy('created_at','asc')->skip(4)->take(1)->first();


         $slider=DB::table('newsdatas')->orderBy('created_at','desc')->take(4)->get();

         $topadd=DB::table('adverts')->first();

         $popularpost=DB::table('newsdatas')->orderBy('number_of_views','desc')->take(4)->get();
         $tags=DB::table('categories')->get();



    	return view('user.index',array('result'=>$obj,'national'=>$national,'thulo'=>$national2,'world'=>$world,'world2'=>$world2,'politics'=>$politics,'politics2'=>$politics2,'economy'=>$economy,'economy2'=>$economy2,'sports'=>$sports,'sports2'=>$sports2,'latestnews'=>$obj2,'today_date'=>$current_date,'recentnews'=>$latest_news,'menus'=>$menu,'dropdowns'=>$dropdown,'onemenu'=>$menu1,'sliders'=>$slider,'add'=>$topadd,'popular'=>$popularpost,'catlinks'=>$categorylinks,'twomenu'=>$menu2,'threemenu'=>$menu3,'fourmenu'=>$menu4,'fivemenu'=>$menu5,'tag'=>$tags));
    	//return view('user.layout',array('result'=>$obj));
       //eturn view('user.single_page',array('result'=>$obj));
        //return view('user.single_page');
    	//return view('user.category-archive');
    
    }

    //public function getHeadline($id){
    	//$headline=newsdata::find($id);
    	//return view('user.single_page',array('result'=>$headline));
    //}

    public function getShowfullnews($id){
      
        $obj= DB::table('newsdatas')->join('categories','newsdatas.category','=','categories.id')->where('newsdatas.id','=',$id)->first();
     
          $obj1= DB::table('newsdatas')->where('id','=',$id)->increment('number_of_views',1);
        $latest_news=DB::table('newsdatas')->orderBy('created_at','desc')->take(8)->get();
          $current_date=Carbon::now()->format('l jS \\of F Y h:i:s A'); 

          $showmenu=DB::select("select * from categories where status='1'");
          $dropdownmenu=DB::select("select * from categories where status='0'");
          //$relatedpost=DB::table('newsdatas')->

       
        return view('user.single_page',array('fullnews'=>$obj,'headlines'=>$latest_news,'today_date'=>$current_date,'seemenu'=>$showmenu,'hidemenu'=>$dropdownmenu));
    }

    public function getShowfullcategory($id){
       $obj=DB::table('newsdatas')->where('category','=',$id)->get();
        //$obj=DB::select("select * from newsdatas where id='$id'");
        dump($obj);
        //echo "niraj";
       //dump($obj);
       return view('user.categoryarchive',array('allcategory'=>$obj));
    }



    public function getMenu(){    $obj=DB::table('categories')->get();
        return view('user.layout',array('menu'=>$obj));
    }

    public function getContact(){
         $popularpost=DB::table('newsdatas')->orderBy('number_of_views','desc')->take(4)->get();
         $latest_news=DB::table('newsdatas')->orderBy('created_at','desc')->take(8)->get();
        $menu=DB::select("select * from categories where status='1'");
         $dropdown=DB::select("select * from categories where status='0'");
          $current_date=Carbon::now()->format('l jS \\of F Y h:i:s A');
            $tags=DB::table('categories')->get();

        return view('user.contactform',array('popular'=>$popularpost,'slider'=>$latest_news,'showtitle'=>$menu,'droptitle'=>$dropdown,'today'=>$current_date,'tag'=>$tags));
    }

    public function postContact(Request $request){
        $obj= new feedback;

           $validation= Validator::make($request->all(),[
            'name'=>'required|Min:3|Max:80',
           
            'email'=>'required|Email',
            'message'=>'required'
          



            ]);

         if($validation->fails()){
            return redirect('contact_us')->with('errors',$validation->errors());
        }


        $obj->name=$request->get('name');
        $obj->email=$request->get('email'); 
        $obj->message=$request->get('message'); 
        $result=$obj->save();
        if($result){
            echo "Thank You For Your Precious Feedback";
           return redirect('');
        }
        else{
            echo "Your Message Was Not Posted";
        }
    }

        public function getSubscribers(Request $request){
            $subscriber= new subscriber;

            $validation= Validator::make($request->all(),[
                'email'=>'required|Email
                ']);
            if($validation->fails()){
                return redirect('/')->with('errors',$validation->errors());
                //echo "niraj";
            }

            $subscriber->subscriber_email=$request->get('email');
            $result=$subscriber->save();
            if($result){
                echo "You Have Subscribed To Our News Portal";
                return redirect('/');
            }
        }

    }

   // public function getLatestnews(){
        //$obj=DB::table('newsdatas')->orderBy('created_at','desc')->take(3);
        //$obj=DB::table('newsdatas')->orderBy('created_at','desc')->get();
        //return view('user.index',array('latestnews'=>$obj));
    //}

    

  

