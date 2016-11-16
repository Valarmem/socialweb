<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CustomerController extends Controller
{
    	
    public function index(){
    	$first = 'Rred';
    	$last = 'Trey';
    	$data = [];
    	$data['first'] = 'Bool';
    	$data['last'] = 'Jelly';
    	// $people = ['Tay','Grey','killer','Monster'];
    	$people = [];
	    $name = '<span style="color:red;">jelly<span>';
	    // return view('sites.about')->with($data);
	    // return view('sites.about',compact('first','last'));
	    return view('sites.about',compact('people'));
    }

    public function contact(){
    	return view('sites.contact');
    }
}
