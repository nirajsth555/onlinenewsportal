<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Auth;
use Illuminate\Notifications\Notifiable;
use Validator;
use App\user;
use Hash;
use App\Http\Requests;
use Illuminate\View\Middleware\ShareErrorsFromSession;  //middleware use garxa validate garna ko lagi
use Carbon\Carbon;
class logincontroller extends Controller
{
    //
    public function getSignup(){
    	return view('admin.adminsignup');
    	//return view('auth.register');
    }

    public function postSignup(Request $request){

        $obj=new user;

       


        
        //validation start
        $validation= Validator::make($request->all(),[
        	'name'=>'required|Min:3|Max:80',
        	'username'=>'required|unique:users,username',
        	'email'=>'required|Email',
        	'password'=>'required|Min:6|Same:confirmpassword',
        	'confirmpassword'=>'required|Min:6|Same:password',
        	//'image'=>'required|Image',
        	
        	'phone'=>'required|numeric|min:10'



        	]);

         if($validation->fails()){
            return view('admin.adminsignup')->with('errors',$validation->errors());
        }

        


        $obj->name=$request->get('name');  //yeta paxadi ko varibale uta form ko name =lekheko thau ko ho
        $obj->username=$request->get('username');
        $obj->password=Hash::make($request->get('password'));
        $obj->password=Hash::make($request->get('confirmpassword'));
        $file= $request->file('image');
        $obj->email=$request->get('email');
        $obj->phone=$request->get('phone');
         $filename= $file->getClientOriginalName();
        $location="lib/adminimages/";
       
        $file->move($location,$filename);
        $image=$location.$filename;
        $obj->image= $image;
        $result= $obj->save();
        if($result){
        	//echo "succesful";
            return redirect('login/login');
        }
        else {
            echo "failed";
        }


}

public function getLogin(){
	return view('admin.adminlogin'); 
}


	public function postLogin(Request $request){   //yeta bata janxy login garna lai
		//$credentials = $this->getLoginCredentials($request);

    //if (Auth::attempt($credentials)) {

        // Log the last login time
        //Auth::user()->last_login = Carbon::now();
        //Auth::user()->save();

    	$email= $request->get('email');
    	$password=$request->get('password');

    	
    	if(Auth::attempt(['email'=>$email,'password'=>$password])){
    		Auth::user()->last_login=date('Y-m-d H-i-s');
             //Auth::user()->last_login=date('l jS \\of F Y h:i:s A');    //last login time nikalne ho
    		Auth::user()->save();                      //yesle chahi save garxa
     		return redirect('admin/index');
    		//Auth::user()->last_login=Carbon::now();
    		//Auth::user()->save();
    		
    	}
    	else{
    		return redirect('login/login');
    		
    	}
    
}


    public function getLogout(){
 

    	Auth::logout();
    	
    	return redirect('login/login');
    }

    }

