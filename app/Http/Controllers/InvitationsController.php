<?php

namespace Codecourse\Http\Controllers;

use Illuminate\Http\Request;

use Codecourse\Http\Requests;

class InvitationsController extends Controller
{
    public function store(Request $request){

    	$this->validate($request->all(), [

    		'email.*' => 'required|email'

    	],[
		
			'email.*' => 'This address must be formatted properly.'
		
		]);

    	return 'All items are valid email address.';
    }
}
