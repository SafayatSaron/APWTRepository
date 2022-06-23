<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function product()
    {
        $p=array("Academics","Admission","Career","Administration",);
        return view("product")->with("products", $p);
    }

    public function teams()
    {
        $p1=array("Saron","Karim","Rahim","Shihon");
        return view("teams")->with("teams", $p1);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
