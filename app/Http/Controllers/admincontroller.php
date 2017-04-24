<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Auth;
use Illuminate\Notifications\Notifiable;
use App\Http\Requests;
use DB;

class admincontroller extends Controller
{
	public function __construct(){   //yesle chahi session destroy garne kam garxa yesbata hami janu parxa authenticate.php ma jane
		$this->middleware('auth');
	}
    public function getIndex(){
    	//$obj=DB::select("select name from users where $email='email' AND $password='password'");
    	//return view('admin.master',array('result'=>$obj));
    	 //$obj=users::find($id);
    	   //$obj1=DB::select("select name from users where id=$id");
    	   //return view('admin.master',array('result'=>$obj1));
    	return view('admin.master');
    }
    


    public function getShowadmin(){
    	$obj=DB::select("select * from users");
    	return view('admin.admins',array('result' => $obj));
    }
}
