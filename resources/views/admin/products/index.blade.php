@extends('layouts.admin-master')

@section('content')
    <hr>
    <h2 class="text-center h1 admin-title">المنتجات</h2>
    <br>
    @if(Session::has('success'))

        <div class="alert alert-success text-center">{{Session::get('success')}} </div>
    @endif

    <br>
    @if(count($products) > 0)
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">الاسم بالعربى</th>
                <th scope="col">الاسم باللغه الانجليزية</th>
                <th scope="col">السعر</th>
                <th scope="col">الصورة</th>
                <th scope="col"> التصنيف بالعربيه </th>
                <th scope="col">التصنيف بالانجليزية</th>
                <th scope="col">وقت الانشاء</th>
                <th scope="col">أخر تعديل</th>
                <th scope="col">تعديل </th>
                <th scope="col">حذف</th>

            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->title_ar}}</td>
                    <td>{{$product->title_en}}</td>
                    <td>{{$product->price}}</td>
                    <td> <img width="100" src="{{$product->photo->photo}}" alt=""> </td>
                    <td>{{$product->category->name_ar}}</td>
                    <td>{{$product->category->name_en}}</td>
                    <td>{{$product->created_at}}</td>
                    <td>{{$product->updated_at}}</td>
                    <td><a href="{{route('products.edit',$product->id)}}"><button class="btn btn-primary">تعديل</button></a></td>

                    <td>

                        {!! Form::open(['method' => 'DELETE','action'=>['ProductController@destroy', $product->id],'files'=>true]) !!}

                        {{Form::submit('حذف',['class'=>'btn btn-danger'])}}
                        {!! Form::close() !!}

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <ul class="pagination justify-content-center mb-4">
            {{$products->links()}}
        </ul>

    @else
        <h2 class="text-center">لايوجد منتجات</h2>

    @endif
    <br>
    <a href="{{route('products.create')}}"><button class="btn btn-danger btn-block">اضافة منتج </button></a>

@endsection
