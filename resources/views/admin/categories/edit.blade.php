@extends('layouts.admin-master')

@section('content')

    <h1 class="text-center admin-title">تعديل التصنيفات</h1>

    <div class="row text-center">
        <div class="col-lg-12">
            @if(Session::has('success'))
                <br>
                <div class="alert alert-success text-center">{{Session::get('success')}} </div>
            @endif
        </div>

        <div class="col-lg-12">
            {!! Form::model($category,['method' => 'PATCH','action'=>['CategoriesController@update', $category->id],'files'=>true]) !!}


            <div class="form-group">
                {{Form::label('name_ar', 'التصنيف بالعربية: ')}}
                {{Form::text('name_ar', null,['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('name_en', 'التصنيف بالانجليزية ')}}
                {{Form::text('name_en', null,['class'=>'form-control'])}}
            </div>
            @error('name_en')
            <div class="alert alert-danger text-center"> {{$message}}</div>
            @enderror
            @error('name_ar')
            <div class="alert alert-danger text-center"> {{$message}}</div>
            @enderror
            {{Form::submit('تعديل',['class'=>'btn btn-danger'])}}
            {!! Form::close() !!}
        </div>


    </div>



@endsection
