<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
	
    public function about(){
    	//$people = [
	    //	'pearson1',
	    //	'pearson2',
	    //	'pearson3',
	    //];
    	
    	$people = [];
    	return view('pages.about', compact('people'));
    }

    public function contact(){
    	return view('pages/contacts');
    }
}
