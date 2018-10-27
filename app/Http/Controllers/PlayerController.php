<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use Auth;

class PlayerController extends Controller
{

    function index(){
        $players = Player::all();
            return view('player', compact('players'));
    }

    public function show($id)
    {
        $player = Player::findOrFail($id);
        $auth = Auth::user();
        return view('point', compact('player'))->with('auth', $auth);
    }

}
