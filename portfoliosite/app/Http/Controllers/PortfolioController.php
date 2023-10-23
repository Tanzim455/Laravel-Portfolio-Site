<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    public function aboutme(){
        return view('aboutme');
    }
    public function experience(){
        return view('experience');
    }
    public function portfolio(){
        return view('portfolio');
    }
}
