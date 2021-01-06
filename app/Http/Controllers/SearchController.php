<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class SearchController extends Controller
{
     function index(Request $req)
    {
        $data= Movies::select("mName")
         ->where("mName", "LIKE", "%{$req->input('query')}%")->get();
         if($data->isEmpty())
         {  
             
             $string=$req->input('query');
            // return strlen($string);
             if(strlen($string)>=3)
             {
                 //return $string;
                 $ok=new Movies();
                 $ok->mName=$string;
                 $ok->save();
            //   $ok=  Movies::create([
                    
            //         "mName" => "This is new movie name"
            //     ]);
                
             }
         }
         else{
         $accData=array();
         foreach($data as $d)
         {
            $accData[] = $d->mName;
         }
        
        return response()->json($accData);
         }
         return null;
    }
    function show(Request $req)
    {
        $data= Movies::select("mName")
         ->where("mName", "LIKE", "%{$req->input('query')}%")->get();
         if($data===null)
         {
             $string=$req->input('query');
             if(strlen($string)>3)
             {
                Movies::create([
                    "mName" => $string
                ]);
             }
         }
         else{
         $accData=array();
         foreach($data as $d)
         {
            $accData[] = $d->mName;
         }
        
        return response()->json($accData);
         }
         return null;
        // return "usman";
        // //->where("id", 1)->get();
    }
}
