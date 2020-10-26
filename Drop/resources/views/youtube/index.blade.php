@extends('layouts.app')

@section('content')
<div class="container mt-4">
{{-- <p>{{dd($videos->items[0])}}</p> --}}
    <div class="row">
        <div class="col-4">
      @foreach ($videos->items as $key => $item )
        <a href="#">
                <div class="card mb-4">

                <img src="{{$item->snippet->thumbnails->medium->url}}" width="50" height="40">
                    <div class="card-body">
                        <h5 class="card-titled">Title</h5>
                    </div>
                    <div class="card-footer">
                        published on 23
                    </div>

                </div>


            </a>
        </div>
   @endforeach
    </div>
</div>
@endsection