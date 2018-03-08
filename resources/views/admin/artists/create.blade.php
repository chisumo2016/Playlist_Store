@extends('layouts.app')

@section('content')

    <div class="col-md-9 col-lg-9  col-sm-9 pull-left"  style="background: #fff;">
        <h1>Add New Artist</h1>
        <div class="row col-md-12  col-lg-12  col-sm-12">



            <form method="post" action="  ">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="project-name">Name <span class="require">*</span></label>
                    <input type="text" id="artists-name" name="name" spellcheck="false" class="form-control"  placeholder="Enter Name" required>
                </div>
                @if($artist == null)
                    <input type="hidden"  name="artists_id" value="{{$artist_id}}" class="form-control">
                @endif



                    <div class="form-group">
                        <label for="artist_name">Name</label>
                        <select name="artist_id" id="" class="form-control">

                        </select>
                    </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="submit"/>
                </div>

            </form>
        </div>
    </div>

@endsection