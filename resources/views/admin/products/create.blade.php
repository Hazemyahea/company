@extends('layouts.admin-master')

@section('content')

    <h1 class="text-center admin-title mt-1">انشاء المنتجات</h1>

    @if(Session::has('success'))

        <div class="alert alert-success text-center">{{Session::get('success')}} </div>
    @endif

    <div class="row text-center">



        <div class="col-lg-6">
            {!! Form::open(['method' => 'post','action'=>'ProductController@store','files'=>true]) !!}
            <div class="form-group">
                {{Form::label('title_ar', 'اسم المنتج باللغة العربية :')}}
                {{Form::text('title_ar',null,['class' => 'form-control'])}}
            </div>
            @error('title_ar')
            <div class="alert alert-danger text-center"> {{$message}}</div>
            @enderror
            <div class="form-group">
                {{Form::label('title_en', 'اسم المنتج باللغة الانجليزية :')}}
                {{Form::text('title_en',null,['class' => 'form-control'])}}
            </div>
            @error('title_en')
            <div class="alert alert-danger text-center"> {{$message}}</div>
            @enderror
            <div class="form-group">
                {{Form::label('category_id', 'اختيار التصنيف :')}}
                <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name_ar}} - {{$category->name_en}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                {{Form::label('photo_id', 'اختيار صورة المنتج')}}
                <hr>

                {{Form::file('photo_id',null,['class' => 'form-control'])}}
                <hr>
            </div>
            <div class="form-group">
                {{Form::label('price', 'سعر المنتج :')}}
                {{Form::text('price',null,['class' => 'form-control'])}}
            </div>
            @error('price')
            <div class="alert alert-danger text-center"> {{$message}}</div>
            @enderror

            <div class="form-group">
                {{Form::submit(' انشاء المنتج ',['class' => 'btn btn-primary'])}}
            </div>


            {!! Form::close() !!}

        </div>

        <div class="col-lg-5">
            <img class="img-fluid rounded mt-4 mr-5" src="http://placehold.it/400x400">
        </div>

    </div>






@endsection
