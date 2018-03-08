<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ArtistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $artists = Artist::all();
        return view('admin.artists.index', compact('artists'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.artists.create');
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
        $artist = new Artist();
        $artist->title = $request->name;

        $artist->save();
        Session::flash('success','Artist has been created successfully.');
        return redirect()->back();
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

        $artist = Artist::find($id);
        return view ('admin.artists.show',compact('artist '));


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
        $artist = Artist::find($id);
        return view('admin.artists.update', compact('artist'));
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
        $artist =Artist::find($id);
        //Validate data item before goes in database
        $this->validate($request,[
            'name' =>'required|max:255' ,

        ]);
        //Update the field
        $artist->name = $request->name;

        $artist->update();
        Session::flash('success','Artist has been Updated successfully.');
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

        Artist::find($id)->delete();
        Session::flash('success','Artist has been deleted successfully.');
        return redirect()->route('admin.artists.index');
    }
}
