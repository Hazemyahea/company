@extends('layouts.home-master')

@section('content')
<!-- Start Blog -->
<div class="blog">
    <div class="container">
        @if(count($posts) > 0)
        <div class="row">
    @foreach($posts as $post)
            <div class="col-lg-12 blog-box">
                <h1 class="text-center blog-head"> {{$post->title}}  </h1>
                <img class="img-fluid" width="700" src="{{$post->photo->photo}}" alt="">
                <p class="text-center blog-body">{{Str::limit($post->body,200)}}</p>
                <button class="more" type="button" name="button"> <a href="{{route('home.post',$post->id)}}">اطلع على الموضوع</a> </button>
            </div>
            @endforeach
        </div>
        @else
        <h2 class="text-center">لاتوجد تدوينات</h2>
        @endif
            <ul class="pagination justify-content-center mb-4">
                {{$posts->links()}}
            </ul>

    </div>
</div>





<!-- End Blog -->
@endsection
