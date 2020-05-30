@extends('layouts.admin-master')

@section('content')

    <h1 class="text-center admin-title mt-1">تعديل التدوينات </h1>

    @if(Session::has('success'))

        <div class="alert alert-success text-center">{{Session::get('success')}} </div>
    @endif

    <div class="row text-center">



        <div class="col-lg-7">
            {!! Form::model($post,['method' => 'PATCH','action'=>['PostController@update', $post->id],'files'=>true]) !!}
            <div class="form-group">
                {{Form::label('title', 'العنوان :')}}
                {{Form::text('title',null,['class' => 'form-control'])}}
            </div>
            @error('title')
            <div class="alert alert-danger text-center"> {{$message}}</div>
            @enderror

            <div class="form-group">
                {{Form::label('photo_id', 'اختيار صورة التدوينة')}}
                <hr>

                {{Form::file('photo_id',null,['class' => 'form-control'])}}
                <hr>
            </div>
            <div class="form-group">
                {{Form::label('body', 'محتوى التدوينة  :')}}
                {{Form::textarea('body',null,['class' => 'form-control'])}}
            </div>
            @error('body')
            <div class="alert alert-danger text-center"> {{$message}}</div>
            @enderror

            <div class="form-group">
                {{Form::submit(' انشاء التدوينة ',['class' => 'btn btn-primary'])}}
            </div>


            {!! Form::close() !!}

        </div>

        <div class="col-lg-5">
            <img class="img-fluid rounded mt-4 mr-5" src="{{$post->photo->photo}}">
        </div>


    </div>






@endsection
