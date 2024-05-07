<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function sobreNos(){
        return view('site.header') . view('site.sobreNos') . view('site.footer');
    }
}
