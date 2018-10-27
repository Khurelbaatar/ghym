<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Point;
use Illuminate\Http\Request;

class PointController extends Controller
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
            $point = Point::where('d1', 'LIKE', "%$keyword%")
                ->orWhere('d2', 'LIKE', "%$keyword%")
                ->orWhere('d3', 'LIKE', "%$keyword%")
                ->orWhere('d4', 'LIKE', "%$keyword%")
                ->orWhere('e1', 'LIKE', "%$keyword%")
                ->orWhere('e2', 'LIKE', "%$keyword%")
                ->orWhere('e3', 'LIKE', "%$keyword%")
                ->orWhere('e4', 'LIKE', "%$keyword%")
                ->orWhere('e5', 'LIKE', "%$keyword%")
                ->orWhere('e6', 'LIKE', "%$keyword%")
                ->orWhere('l1', 'LIKE', "%$keyword%")
                ->orWhere('l2', 'LIKE', "%$keyword%")
                ->orWhere('t1', 'LIKE', "%$keyword%")
                ->orWhere('total', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('item_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $point = Point::latest()->paginate($perPage);
        }

        return view('admin.point.index', compact('point'));
    }

    public function create()
    {
        return view('admin.point.create');
    }



    public function store(Request $request)
    {

        $requestData = $request->all();
        Point::create($requestData);
 

        return redirect('admin/point')->with('flash_message', 'Point added!');
    }


    public function show($id)
    {
        $point = Point::findOrFail($id);

        return view('admin.point.show', compact('point'));
    }


    public function edit($id)
    {
        $point = Point::findOrFail($id);

        return view('admin.point.edit', compact('point'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $point = Point::findOrFail($id);
        $point->update($requestData);

        return redirect('admin/point')->with('flash_message', 'Point updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Point::destroy($id);

        return redirect('admin/point')->with('flash_message', 'Point deleted!');
    }
}
