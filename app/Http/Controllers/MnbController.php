<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Point;

class MnbController extends Controller
{
    function index(){
        $points = Point::orderBy('id','desc')->take(1)->get();
            return view('mnb', compact('points'));
    }
}
