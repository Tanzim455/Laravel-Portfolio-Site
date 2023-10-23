<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    //
    public function aboutme(){
        $json = Storage::json('/public/about.json',JSON_THROW_ON_ERROR);
        //Pick the first value for me details

        ['intro'=>$intro,'introdescription'=>$introdescription]=$json[0];

        //Take array from index 1
        $skills=array_slice($json,-4);

         return view('aboutme',compact('intro','introdescription','skills'));

    }
    public function experience(){
        $json = Storage::json('/public/experience.json',JSON_THROW_ON_ERROR);

         return view('experience',compact('json'));
    }
    public function portfolio(){
        $json = Storage::json('/public/portfolio.json',JSON_THROW_ON_ERROR);

         return view('portfolio',compact('json'));
    }
}
