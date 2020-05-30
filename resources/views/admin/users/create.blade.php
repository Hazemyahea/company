@extends('layouts.admin-master')

@section('content')

    <h1 class="text-center admin-title mt-1">انشاء المنتجات</h1>

    @if(Session::has('success'))

        <div class="alert alert-success text-center">{{Session::get('success')}} </div>
    @endif

    <div class="row text-center">



        <div class="col-lg-12">
            {!! Form::open(['method' => 'post','action'=>'UserController@store','files'=>true]) !!}
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
                {{Form::submit(' انشاء العضوية ',['class' => 'btn btn-primary'])}}
            </div>


            {!! Form::close() !!}

        </div>


    </div>






@endsection
