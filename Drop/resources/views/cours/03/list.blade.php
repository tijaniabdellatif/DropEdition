@extends('layouts.app')

@section('content')
<h1>Data list</h1>

<ul>

    @foreach ($data as $item)
        
<li>{{json_encode($item)}}</li>
    @endforeach
   
</ul>
@endsection
