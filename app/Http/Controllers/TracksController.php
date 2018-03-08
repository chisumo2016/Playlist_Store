<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TracksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tracks = Track::all();
        return view('admin.tracks.index', compact('tracks'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tracks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //Validate data item before goes in database
        $this->validate($request,[
            'title' =>'required|max:255' ,

        ]);
        //Insert the item into database
        $track = new Track();
        $track->title = $request->title;

        $track->save();
        Session::flash('success','Track has been created successfully.');
        return redirect(' playslists ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $track = Track::find($id);
        return view ('admin.tracks.show',compact(' track '));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $track = Track::find($id);
        return view('admin.tracks.update', compact('track'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $track  = Track::find($id);
        //Validate data item before goes in database
        $this->validate($request,[
            'title' =>'required|max:255' ,

        ]);
        //Update the field
        $track ->title = $request->title;

        $track ->update();
        Session::flash('success','Tracks has been Updated successfully.');
        return redirect()->route('admin.tracks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Track::find($id)->delete();
        Session::flash('success','Tracks has been deleted successfully.');
        return redirect()->route('admin.tracks.index');
    }
}
