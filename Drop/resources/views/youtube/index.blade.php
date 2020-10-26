@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">

        <div class="col-4">

            <a href="">

                <div class="card mb-4">

                    <img src="{{asset("images/dump.png")}}" width="50%" height="40%">
                    <div class="card-body">
                        <h5 class="card-titled">Title</h5>
                    </div>
                    <div class="card-footer">
                        published on 23
                    </div>

                </div>


            </a>
        </div>
         <div class="col-4">

         <a href="{{route('youtube.results')}}">

                <div class="card mb-4">

                    <img src="{{asset("images/dump.png")}}" width="50%" height="40%">
                    <div class="card-body">
                        <h5 class="card-titled">Title</h5>
                    </div>
                    <div class="card-footer">
                        published on 23
                    </div>

                </div>


            </a>
        </div>
         <div class="col-4">

            <a href="">

                <div class="card mb-4">

                    <img src="{{asset("images/dump.png")}}" width="50%" height="40%" class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-titled">Title</h5>
                    </div>
                    <div class="card-footer">
                        published on 23
                    </div>

                </div>


            </a>
        </div>

    </div>
</div>
@endsection