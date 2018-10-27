<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Player;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use DB;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $player = Player::where('lname', 'LIKE', "%$keyword%")
                ->orWhere('fname', 'LIKE', "%$keyword%")
                ->orWhere('country_id', 'LIKE', "%$keyword%")
                ->orWhere('number', 'LIKE', "%$keyword%")
                ->orWhere('birth', 'LIKE', "%$keyword%")
                ->orWhere('item_id', 'LIKE', "%$keyword%")
                ->orWhere('photo', 'LIKE', "%$keyword%")
                ->orWhere('point_id', 'LIKE', "%$keyword%")
                ->orWhere('category_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $player = Player::latest()->paginate($perPage);
        }

        return view('admin.player.index', compact('player'));
    }


    public function create()
    {
        return view('admin.player.create');
    }


    public function store(Request $request)
    {


                    $table = new Player;
                    $table -> lname = $request->Input('lname');
                    $table -> fname = $request->Input('fname');
                    $table -> country_id = $request->Input('country_id');
                    $table -> number = $request->Input('number');
                    $table -> birth = $request->Input('birth');
                    $table -> item_id = $request->Input('item_id');
                    $table -> point_id = $request->Input('point_id');
                    $table -> category_id = $request->Input('category_id');

                    //print_r($table);exit();
                    $table -> save();
                    return Redirect::to('admin/player')->with('success', 'Амжилттай нэмэгдлээ');

    }


    public function show($id)
    {
        $player = Player::findOrFail($id);

        return view('admin.player.show', compact('player'));
    }


    public function edit($id)
    {
        $player = Player::findOrFail($id);

        return view('admin.player.edit', compact('player'));
    }


    public function update(Request $request, $id)
    {
        
           if( $image = $request->file('photo') ){

                    $image_name = time().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/images/photos/thumbs');
                    $img = Image::make($image->getRealPath());
                    $img->resize(200, 265, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath.'/'.$image_name);

                    $destinationPath = public_path('/images/photos');
                    $image->move($destinationPath, $image_name);


                    $table = new Player;
                    $table = array(
                                'lname' => $request->Input('lname'),
                                'fname' => $request->Input('fname'),
                                'country_id' => $request->Input('country_id'),
                                'number' => $request->Input('number'),
                                'birth' => $request->Input('birth'),
                                'item_id' => $request->Input('item_id'),
                                'point_id' => $request->Input('point_id'),
                                'category_id' => $request->Input('category_id'),

                                'photo' => $image_name
                                );

                    Player::where('id', $id)->update($table);

                    return Redirect::to('admin/player')->with('success', 'Амжилттай засагдлаа');

            }else{

                    $table = new Player;
                    $table = array(
                                'lname' => $request->Input('lname'),
                                'fname' => $request->Input('fname'),
                                'country_id' => $request->Input('country_id'),
                                'number' => $request->Input('number'),
                                'birth' => $request->Input('birth'),
                                'item_id' => $request->Input('item_id'),
                                'point_id' => $request->Input('point_id'),
                                'category_id' => $request->Input('category_id'),
                                );

                    Player::where('id', $id)->update($table);

                    return Redirect::to('admin/player')->with('success', 'Амжилттай засагдлаа');
             };
    }


    public function destroy($id)
    {
        Player::destroy($id);

        return redirect('admin/player')->with('flash_message', 'Player deleted!');
    }
}
