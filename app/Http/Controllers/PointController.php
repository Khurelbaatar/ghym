<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Point;
use Auth;
use DB;
use App\Player;
use App\Item;

class PointController extends Controller
{


   public function index(){

            return view('point');
    }

   public function create(){

            return view('point');
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $item = Item::where('name', $request->item_id)->first();
        //tuhain toglogchiin onoo burtgegdsen bnu?
        $isExists = DB::table('points')->
                            where('player_id', $request->player_id)->
                            where('item_id', $item->id)->
                            exists();
        $point = null;

        if ($isExists) {
           // DB::table('points')->
           //          where('player_id',$request->player_id)->
           //          where('item_id',$request->item_id)->
           //          update([$user->name => $request->form_point]);
            
            $point = Point::
                    where('player_id',$request->player_id)->
                    where('item_id', $item->id)->first();
        }
        else {
           // DB::table('points')->
           //          insert(
           //              ['player_id'=>$request->player_id],
           //              ['item_id'=>$request->item_id],
           //              [$user->name=> $request->form_point]);

            $point = new Point;
            $point->player_id = $request->player_id;
            $point->item_id = $item->id;
        }    

        if( $user->name == 'd1' ) {
            $point -> d1 = $request->form_point;
        }
        else if( $user->name == 'd2' ) {
            $point -> d2 = $request->form_point;
        }
        else if( $user->name == 'd3' ) {
            $point -> d3 = $request->form_point;
        }
        else if( $user->name == 'd4' ) {
            $point -> d4 = $request->form_point;
        }
        else if( $user->name == 'e1' ) {
            $point -> e1 = $request->form_point;
        }
        else if( $user->name == 'e2' ) {
            $point -> e2 = $request->form_point;
        }
        else if( $user->name == 'e3' ) {
            $point -> e3 = $request->form_point;
        }
        else if( $user->name == 'e4' ) {
            $point -> e4 = $request->form_point;
        }
        else if( $user->name == 'e5' ) {
            $point -> e5 = $request->form_point;
        }
        else if( $user->name == 'e6' ) {
            $point -> e6 = $request->form_point;
        }
        else if( $user->name == 'l1' ) {
            $point -> l1 = $request->form_point;
        }
        else if( $user->name == 'l2' ) {
            $point -> l2 = $request->form_point;
        }
        else if( $user->name == 't1' ) {
            $point -> t1 = $request->form_point;
        }

        // print_r($table);exit();
        $point -> save();
        return redirect('player')->with('flash_message', 'Point added!');
    }
}
