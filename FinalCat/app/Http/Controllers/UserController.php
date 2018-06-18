<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User_94231;

class UserController extends Controller
{

	function save(Request $req)
	{
		$first_name = $req->input('first_name');
		$last_name = $req->input('last_name');
		$email = $req->input('email');
        $password=$req->input('password');
		//$password_string = mysqli_real_escape_string($_POST["password"]);
              // The value of $password_hash
              // should similar to the following:
                
        // $password_hash = password_hash($password, PASSWORD_DEFAULT);
		//$password=$req->input('password');
		$data = array('first_name'=>$first_name,'last_name'=>$last_name,'email'=>$email,'password'=>$password);

		DB::table('user_94231s')->insert($data);
 
		return response()->json($data);
	}

	public function showgymusers()
	{
		$data = User_94231::all();

		return response()->json($data);

	}

	public function loginuser(Request $req)
	{ $email=$req->input('email');
      $password=$req->input('password');

		$user = User_94231::where('email',$email)->get();
		 
		 return $user;
		  

		 	# code...  }

		  
           
         
         


     }

	
	public function myprofile(Request $req)
	{
		$email = $req->input('email');

		$data = User_94231::where('email',$email)->get();

		return response()->json($data);

	}

    //
}
