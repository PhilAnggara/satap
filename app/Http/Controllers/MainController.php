<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('pages.dashboard');
    }
    
    public function barcode()
    {
        return view('pages.scan-barcode');
    }
}
