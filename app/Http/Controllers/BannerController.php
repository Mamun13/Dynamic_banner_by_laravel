<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function dashboard(){
        return view('pages.dashboard');
    }
    // public function main(){
    //     return view('pages.main');
    // }
}
