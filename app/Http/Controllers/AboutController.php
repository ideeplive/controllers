<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //controller Returning String
//    function show(){
//        return 'This is about Page in Show function';
//    }

    //Getting Data By Parametter
   function show($name){
       return 'My name is  ' . $name;
   }

 









}
