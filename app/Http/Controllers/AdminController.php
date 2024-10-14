<?php

namespace App\Http\Controllers;
use App\Models\SanPham;
use App\Models\catories;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $viewData = [];
        return view('admin.index')->with("viewData", $viewData);
    }

    public function flot()
    {
        $viewData = [];
        return view('admin.flot')->with("viewData", $viewData);
    }

    public function morris()
    {
        $viewData = [];
        return view('admin.morris')->with("viewData", $viewData);
    }

    public function tables()
    {
         $sanPhams = SanPham::all();
        return view('admin.tables',compact('sanPhams'));
    }

    public function forms()
    {
        $viewData = [];
        return view('admin.forms')->with("viewData", $viewData);
    }


    public function panels_wells()
    {
        $viewData = [];
        return view('admin.index')->with("viewData", $viewData);
    }

    public function buttons()
    {
        $viewData = [];
        return view('admin.buttons')->with("viewData", $viewData);
    }

    public function notifications()
    {
        $viewData = [];
        return view('admin.notifications')->with("viewData", $viewData);
    }

    public function typography()
    {
        $viewData = [];
        return view('admin.typography')->with("viewData", $viewData);
    }

    public function icons()
    {
        $viewData = [];
        return view('admin.icons')->with("viewData", $viewData);
    }

    public function grid()
    {
        $viewData = [];
        return view('admin.grid')->with("viewData", $viewData);
    }

    public function blank()
    {
        $viewData = [];
        return view('admin.blank')->with("viewData", $viewData);
    }

    public function login()
    {
        $viewData = [];
        return view('admin.login')->with("viewData", $viewData);
    }
    
    public function catories()
    {
        $catories = catories::all();
        return view('admin.catories',compact('catories'));
    }

}
