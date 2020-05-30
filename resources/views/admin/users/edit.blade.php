@extends('layouts.admin-master')

@section('content')

    <h1 class="text-center admin-title mt-1">تعديل التدوينات </h1>

    @if(Session::has('success'))

        <div class="alert alert-success text-center">{{Session::get('success')}} </div>
    @endif

    <div class="row text-center">



        <div class="col-lg-7">
            {!! Form::model($user,['method' => 'PATCH','action'=>['UserController@update', $user->id],'files'=>true]) !!}
            <div class="form-group">
                {{Form::label('name', 'الاسم :')}}
                {{Form::text('name',null,['class' => 'form-control'])}}
            </div>
            @error('name')
            <div class="alert alert-danger text-center"> {{$message}}</div>
            @enderror

            <div class="form-group">
                {{Form::label('photo_id', 'اختيار صورة العضو')}}
                <hr>

                {{Form::file('photo_id',null,['class' => 'form-control'])}}
                <hr>
            </div>
            <div class="form-group">
                {{Form::label('email', 'البريد الالكترونى  :')}}
                {{Form::email('email',null,['class' => 'form-control'])}}
            </div>
            @error('email')
            <div class="alert alert-danger text-center"> {{$message}}</div>
            @enderror
            <div class="form-group">
                {{Form::label('password', 'الرقم السرى :')}}
                {{Form::password('password',null,['class' => 'form-control'])}}
            </div>
            @error('password')
            <div class="alert alert-danger text-center"> {{$message}}</div>
            @enderror

            <div class="form-group">
                {{Form::submit(' تعديل العضوية ',['class' => 'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}

        </div>

        <div class="col-lg-5">
            <img class="img-fluid rounded mt-4 mr-5" src="{{$user->photo->photo}}">
        </div>


    </div>






@endsection
