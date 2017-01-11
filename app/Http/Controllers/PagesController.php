<?php

namespace Codecourse\Http\Controllers;

use Codecourse\Http\Requests;
use Illuminate\Http\Request;

class PagesController extends Controller
{
   
    public function about()
    {
        # Passing data to view

        # Sample 1
        # $name = 'Nopphon <span style="color:red">Chuachun</span>';
        # return view('pages.about')->with('name',$name);
       
        #Sample 2
        /*return view('pages.about')->with([
            'first' => 'Nopphon',
            'last' => 'Chuachun',
        ]);*/

        #Sample 3
        /*$data = [];
        $data['first'] = 'Nopphon';
        $data['last'] = 'Chuachun';

        return view('pages.about', $data);*/

        # Sample 4
        /*$first = 'Nopphon';
        $last = 'Chuachun';

        return view('pages.about', compact('first','last'));*/


        $people = [

            'Nopphon Chuachun', 'Somchai saimamer', 'Chuthamat Charoenwai'
        ];
        $helper = test();
        echo $helper;
        return view('pages.about', compact('people','helper'));
    }
}
