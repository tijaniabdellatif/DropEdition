@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">

        <div class="col-8">


                <div class="card mb-4" style="width:100%">
                 <div class="embed-responsive embed-responsive-16by9">
                      <iframe src="https://www.youtube.com/watch?v=5X3-2XfBNmg&ab_channel=LesInqualifiables" width="560" height="600" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <div class="card-body">
                          <h5>Lorem ipsum dolor</h5>
                          <p class="text-secondary">Published at 20</p>
                          <p>lorem ipsum dolor</p>
                      </div>
                 </div>
                </div>


        </div>
           <div class="col-4">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                    <img src="{{asset("/images/dump.png")}}">
                        <div class="card-body">
                            <h5>lorem </h5>
                        </div>
                        <div class="card-footer text-muted">
                            published at 23
                        </div>
                    </div>
                </div>
            </div>
           </div>
    </div>
</div>
@endsection