@extends('layouts.app');

@section('content')
    <div class="col-md-6 col-lg-6 col-md-offset-2 col-lg-offset-3">
        <div class="card ">
            <div class="card-header bg-primary ">
                Artists   <a href="" class="pull-right btn btn-primary btn-sm">Create New </a>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach($artists as $artist)
                        <li class="list-group-item"><a href="">{{ $artist->name}}</a></li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
@endsection