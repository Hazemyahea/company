@extends('layouts.home-master')


@section('content')

    <!-- Start Blog -->
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 blog-box">
                    <h1 class="text-center blog-head">{{$post->title}}</h1>
                    <h3 class="text-center">{{$post->created_at->toDateString()}}</h3>
                    <img class="img-fluid" width="700" src="{{$post->photo->photo}}" alt="">
                    <p class="text-center blog-body">  {{$post->body}} </p>
                </div>

            </div>
        </div>
    </div>





    <!-- End Blog -->


@endsection
