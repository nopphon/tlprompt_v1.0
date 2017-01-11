<?php

namespace Codecourse\Http\Controllers;

use Session;
use Codecourse\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller {

	public function index(){

		if(Session::get('displayName')){

			if(Session::get('displayName')){

				return View('register.index', ['user' => Session::get('displayName')]);
			}else{
				return Redirect::back()->withErrors('Invalid Content , please try again');
			}
				
		}else{
			
			return Redirect('login');	
		}
	
	}

	public function store(Request $request){
	
		# Authen User and Pass
        $input = $request->all();
        $username = $request->input('username');

		#echo '<pre>'.print_r($username,true).'</pre>'; exit();
		
		$path   = "/CaOperation/rest/login";
		$method = "checkRegister";
		$body = "username=".$username;
		
		//$object = getDataAPI($path, $method, $query="", $body);
		//echo '<pre>'.print_r($username,true).'</pre>'; exit();
		
		//if(isset($object->dataExcept)){
		if(!empty($username)){
			//return json_encode($object);
			
			$status='1';
			return view('ajax.popup-check-card-id', compact('username','status'));
		}else{
			$status='2';
			return view('ajax.popup-check-card-id', compact('username','status'));
		}
	}

}
