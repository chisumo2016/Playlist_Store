<?php

namespace App\Http\Controllers;

use App\playlists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PlaylistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $playlists = Playlists:: all();
        return view('admin.playslits.index', compact('playlists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.playslits.create');
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
            'name' =>'required|max:255' ,

        ]);
        //Insert the item into database
        $playlist = new Playlists();
        $playlist->name = $request->name;

        $playlist->save();
        Session::flash('success','Playlist has been created successfully.');
        return redirect()->route('admin.playlists.index');

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
        $playslist = Playlits::find($id);
        return view ('admin.artists.show',compact('playslist'));
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
        $playslist = Artist::find($id);
        return view('admin.artists.update', compact(' playslist'));
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

        $playlist = Playlists::find($id);
        //Validate data item before goes in database
        $this->validate($request,[
            'name' =>'required|max:255' ,

        ]);
        //Update the field
        $playlist->name = $request->name;

        $playlist->update();
        Session::flash('success','Playlist has been Updated successfully.');
        return redirect()->route('admin.artists.index');
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

        Playlits::find($id)->delete();
        Session::flash('success','Playlist has been deleted successfully.');
        return redirect()->route('admin.artists.index');
    }
}
