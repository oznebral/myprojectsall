<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index(){
        return view('index');
    }
    public function ourhotel(){
            return view('ourhotel');
    }

}
