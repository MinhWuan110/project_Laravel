<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        return view('home.index')->with("viewData", $viewData);
    }

    public function contact_us()
    {
        $viewData = [];
        return view('home.contact_us')->with("viewData", $viewData);
    }

    public function blog()
    {
        $viewData = [];
        return view('home.blog')->with("viewData", $viewData);
    }

     public function single()
    {
        $viewData = [];
        return view('home.single')->with("viewData", $viewData);
    }
}
