@extends('layouts.app')

@section('content')
<div class="container mt-4">
{{-- <p>{{dd($videos->items[0])}}</p> --}}
    <div class="row">
        @foreach ($videos->items as $key => $item )
        <div class="col-4">
<<<<<<< HEAD
        <a href="{{route('youtube.watch')}}">
=======
      @foreach ($videos->items as $key => $item )
        <a href="{{route('youtube.watch',[($item->id->videoId)])}}">
>>>>>>> develop
                <div class="card mb-4">

                <img src="{{$item->snippet->thumbnails->medium->url}}" width="100%" height="50%">
                    <div class="card-body">
                        <h5 class="card-titled">{{ \Illuminate\Support\Str::limit($item->snippet->title,$limit=50,$end='....') }}</h5>
                    </div>
                    <div class="card-footer">
                        Published at {{date('d M Y',strtotime($item->snippet->publishTime))}}
                    </div>

                </div>


            </a>
        </div>
   @endforeach
    </div>
</div>
@endsection