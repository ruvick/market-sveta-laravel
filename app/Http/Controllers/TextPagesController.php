<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextPagesController extends Controller
{
    public function opt_sotrudnihestvo() {
        return view('opt_sotrudnihestvo');
    }

    public function pay() {
        return view('pay');
    }

    public function aktsii() {
        return view('aktsii');
    }

    public function brands() {
        return view('brands');
    }

    public function about() {
        return view('about');
    }
    
    public function dostavka() {
        return view('dostavka');
    }
}
