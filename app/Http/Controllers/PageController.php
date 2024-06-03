<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    // Controller method to display page1
    public function afficherPage1(){
        return view('page1');
    }

    // Controller method to display page2
    public function afficherPage2 (){
        return view('page2');
    }

    public function donnees (){

        $name = "Ahmed";
        $age = 28;
        $names = ["Mohammaed", "Ahmad", "Khalid "];
        return view('donnees/index')->with('variable',$name)->with('age',$age)->with('names',$names); 
    }
    
}
