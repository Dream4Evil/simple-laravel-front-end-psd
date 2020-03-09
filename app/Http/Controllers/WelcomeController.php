<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_about;

class WelcomeController extends Controller
{
    public function index() 
	{	
        $welcome_data = tbl_about::all()->first();
        
        return view('welcome', compact('welcome_data'));
    }
    
}
