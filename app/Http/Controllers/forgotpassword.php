<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\Middleware\ShareErrorsFromSession;  
use App\User;
use App\Http\Requests;
use App\password_reset;
use Validator;
use Auth;
use Hash;
use DB;
use Auth\ForgotPasswordController;
use Auth\ResetPasswordController;


class forgotpassword extends Controller
{
    //
    public function getForgotpassword(){
    	return view('admin.forgotpassword');
    }

    public function postForgotpassword(Request $request){


           
           $email = $request->get('email');
           //dump($email);
           $token=mt_rand(1000,9999);
           $data= DB::table('users')
           				->where('email','=',$email)
           				->first();
           //dump($data);
           if(count($data)>0){
           	//DB::table('users')->where('email','=',$email)->update(['reset_token','=',$token]);
           	DB::select("UPDATE users SET reset_token='$token' WHERE email='$email'");
           	$msg="Reset code has been sent to your e-mail address. Please enter the Provided reset code to reset your password ";
           	echo $msg;

           	if(mail($email,"Password Reset","Please enter given code to reset your password",$msg))
           	return view('admin.password_reset');	
            else{
              echo "failed msg";
            }


           }

           else{
           	$msg="Reset code has been sent to you e-mail address";
           	echo $msg;
           		return view('admin.password_reset');	
           }

    	}

    	public function postCode(Request $request){

    		$token= $request->get('reset_code');
    		$check = DB::table('users')->where('reset_token','=',$token)->first();
    		//dd($check);
    		$email = $check->email;
    		if(count($check) > 0){
    			return view('admin.password_reset_form',array('result'=>$check));
          //DB::select("UPDATE users set reset_token=NULL where email='$email' ");
    		//else{
    			//return view('admin.password_reset_form',array('result'=>$check));
    		//}


    	}
    }

    	public function postNewpassword(Request $request){

    		  $email= $request->get('email');
            $check= DB::table('users')->where('email','=',$email)->first();

    		 //validation start
        $validation= Validator::make($request->all(),[
        	
        	'password'=>'required|Min:6|Same:confirmpassword',
        	'confirmpassword'=>'required|Min:6|Same:password'



        	]);

         if($validation->fails()){
            return view('admin.password_reset_form',array('result'=>$check))->with('errors',$validation->errors());
        }

      
            //$email= $request->get('email');
            //$check= DB::table('users')->where('email','=',$email)->first();
    		$password=Hash::make($request->get('password'));
    		$password2=Hash::make($request->get('confirmpassword'));
    		DB::select("UPDATE users SET password='$password' WHERE email='$email'");
          DB::select("UPDATE users set reset_token=NULL where email='$email' ");
    		return redirect('login/login');
    		


    	}
    }
    

   

