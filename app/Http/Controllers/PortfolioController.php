<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    //
    public function aboutme(){
        $json = Storage::json('/public/data/about.json',JSON_THROW_ON_ERROR);
        //Pick the first value for me details

        ['intro'=>$intro,'introdescription'=>$introdescription]=$json[0];

        //Take array from index 1
        $skills=array_slice($json,-4);

         return view('aboutme',compact('intro','introdescription','skills'));

    }
    public function experience(){
        $json = Storage::json('/public/data/experience.json',JSON_THROW_ON_ERROR);

         return view('experience',compact('json'));
    }
    public function portfolio(){
        $json = Storage::json('/public/data/portfolio.json',JSON_THROW_ON_ERROR);

         return view('portfolio',compact('json'));
    }
    public function singleportfolio($id){

        $json = Storage::json('/public/data/portfolio.json',JSON_THROW_ON_ERROR);

        $filteredArray = Arr::where($json, function ($value) use ($id) {
            return $value['id'] == $id;
        });

        if(count($filteredArray)){
            $merged_array=array_merge(...$filteredArray);
            ['description'=>$description,'image'=>$image]=$merged_array;
            return view('singleportfolio',compact('description','image'));
        }

        if(!count($filteredArray)){
             abort(code:404,message:"The page does not exist");

        }



    }
}
