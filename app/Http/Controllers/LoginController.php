<?php

namespace Codecourse\Http\Controllers;

use Session;
use Codecourse\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller{
        
    public function index()
    {
        return View('login.index');
    }
    
    public function store(Request $request)
    {
        
        # Authen User and Pass
        $input = $request->all();
        $username = $request->input('username');
        $password = md5($request->input('password'));
        
        //echo '<pre>'.print_r($input,true).'</pre>'; exit();
        
        $remember = ($request->input('login_ck_rememberPass')) ? true : false;
        $path     = "/CaOperation/rest/login";
        $method   = "checkLoginSecure";
        $body     = "username=" . $username . "&password=" . $password . "&channel=tlprompt";
        
        #echo '<pre>'.print_r($body,true).'</pre>'; exit();
        
        #$object = getDataAPI($path, $method, $query = "", $body);
        
        #echo '<pre>'.print_r($object,true).'</pre>';

        //if (isset($object->data)) {
          if ($username=='nopphon.ch@hotmail.com') {
            
            Session::flush();
            //Session::put('displayName', $object->data[0]->fNameT . ' ' . $object->data[0]->lNameT);
            Session::put('displayName', $username);
            return Redirect('register');
            
        } else {
            return Redirect::back()->withErrors('Username and password is not correct.')->withInput();
        }
    }
    
}
