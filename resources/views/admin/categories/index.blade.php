@extends('layouts.admin-master')

@section('content')
<hr>
    <h2 class="text-center h1 admin-title">الأقسام</h2>
<br>
<div class="text-center">
    <h3>اضافة قسم</h3>
    <br>
    @if(Session::has('success'))
        <div class="alert alert-success float-right">{{Session::get('success')}} </div>
    @endif
    @error('name_ar')
    <div class="alert alert-danger text-center">{{$message}}</div>
    @enderror
    @error('name_en')
    <div class="alert alert-danger text-center">{{$message}}</div>
    @enderror
    {!! Form::open(['method'=>'POST','action'=>'CategoriesController@store']) !!}
    <div class="form-group ">
        {{Form::label('name_ar', ' التصنيف بالعربية : ')}}
        {{Form::text('name_ar', null,['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('name_en', ' التصنيف بالانجليزية : ')}}
        {{Form::text('name_en', null,['class'=>'form-control'])}}
    </div>

    {{Form::submit('Add Category',['class'=>'btn btn-info'])}}
    {!! Form::close() !!}

</div>

<br>
    @if(count($categories) > 0)
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">التصنيف بالعربى</th>
            <th scope="col">التصنيف باللغه الانجليزية</th>
            <th scope="col">وقت الانشاء</th>
            <th scope="col">أخر تعديل</th>
            <th scope="col">تعديل </th>
            <th scope="col">حذف</th>

        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
        <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->name_ar}}</td>
            <td>{{$category->name_en}}</td>
            <td>{{$category->created_at}}</td>
            <td>{{$category->updated_at}}</td>
            <td><a href="{{route('categories.edit',$category->id)}}"><button class="btn btn-primary">تعديل</button></a></td>

            <td>

                {!! Form::open(['method' => 'DELETE','action'=>['CategoriesController@destroy', $category->id],'files'=>true]) !!}

                {{Form::submit('حذف',['class'=>'btn btn-danger'])}}
                {!! Form::close() !!}

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @else
    <h2 class="text-center">لايوجد تصنيفات</h2>

    @endif
@endsection
