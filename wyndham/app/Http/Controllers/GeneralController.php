<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function ourhotel()
    {
        return view('ourhotel');
    }

    public function rooms()
    {
        return view('rooms');
    }

    public function facilities()
    {
        return view('facilities');
    }

    public function contact()
    {
        return view('contact');
    }

    public function standartroom()
    {
        return view('standartroom');
    }

    public function deluxeroom()
    {
        return view('deluxeroom');
    }

    public function lobby()
    {
        return view('lobby');
    }

    public function restaurant()
    {
        return view('restaurant');
    }

    public function meetingroom()
    {
        return view('meetingroom');
    }

    public function mediaroom()
    {
        return view('mediaroom');
    }

    public function ballroom()
    {
        return view('ballroom');
    }

    public function fitness()
    {
        return view('fitness');
    }

    public function terms()
    {
        return view('terms');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function disclamer()
    {
        return view('disclamer');
    }
}
