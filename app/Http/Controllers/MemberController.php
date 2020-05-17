<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('member');
    }

    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('member');
        }
    }
}
