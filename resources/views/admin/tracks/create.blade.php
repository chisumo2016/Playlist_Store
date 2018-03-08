@extends('layouts.app')

@section('content')


    <div class="col-md-9 col-lg-9  col-sm-9 pull-left"  style="background: #fff;">
        <h1>Add New Tracks</h1>
        <div class="row col-md-12  col-lg-12  col-sm-12">

            <form method="post" action="{{route('playlist.store')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="playlist-name">Title <span class="require">*</span></label>
                    <input type="text" id="artists-title" name="title" spellcheck="false" class="form-control"  placeholder="Enter Title" required>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="submit"/>
                </div>

            </form>
        </div>
    </div>

@endsection