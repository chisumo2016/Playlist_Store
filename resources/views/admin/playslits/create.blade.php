@extends('layouts.app')

@section('content')


    <div class="col-md-9 col-lg-9  col-sm-9 pull-left"  style="background: #fff;">
        <h1>Add New Playslist</h1>
        <div class="row col-md-12  col-lg-12  col-sm-12">


            <form method="post" action="{{route('playlist.store')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="playlist-name">Name <span class="require">*</span></label>
                    <input type="text" id="artists-name" name="name" spellcheck="false" class="form-control"  placeholder="Enter Name" required>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="submit"/>
                </div>

            </form>
        </div>
    </div>

@endsection