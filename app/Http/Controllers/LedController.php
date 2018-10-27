<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Point;

class LedController extends Controller
{
    
    function index(){
        $points = Point::orderBy('id','desc')->take(1)->get();
            return view('sps', compact('points'));
    }


    function all(){
        $points = Point::orderBy('created_at','desc')->get();
            return view('led_all', compact('points'));
    }



    function led(){
        $points = Point::orderBy('created_at','desc')->take(1)->get();
            return view('led', compact('points'));
    }


    function sps_1(){
        $points = Point::orderBy('id','desc')->take(1)->get();
            return view('sps_1', compact('points'));
    }
}
