<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //
	public function index(){
    	return view('welcome');
    }

    public function vision(){
    	return view('vision');
    }

    public function mission(){
    	return view('mission');
    }

    public function strategy() {
    	return view('strategy');
	}

	public function ourcompany() {
    	return view('ourcompany');
	}

	public function ourstrengths() {
    	return view('ourstrengths');
	}

	public function oursproducts() {
    	return view('oursproducts');
	}
}