<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chgController extends Controller
{
    public function chg(){
    return view('site.header') . view('site.chg') . view('site.footer');
    }
}
