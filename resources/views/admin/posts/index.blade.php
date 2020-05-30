@extends('layouts.admin-master')

@section('content')
    <hr>
    <h2 class="text-center h1 admin-title">التدوينات</h2>
    <br>
    @if(Session::has('success'))

        <div class="alert alert-success text-center">{{Session::get('success')}} </div>
    @endif

    <br>
    @if(count($posts) > 0)
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">العنوان </th>
                <th scope="col">المحتوى</th>
                <th scope="col">الصورة</th>
                <th scope="col">وقت الانشاء</th>
                <th scope="col">أخر تعديل</th>
                <th scope="col">تعديل </th>
                <th scope="col">حذف</th>

            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{Str::limit($post->body,50)}}</td>
                    <td> <img width="100" src="{{$post->photo->photo}}" alt=""> </td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                    <td><a href="{{route('posts.edit',$post->id)}}"><button class="btn btn-primary">تعديل</button></a></td>

                    <td>

                        {!! Form::open(['method' => 'DELETE','action'=>['PostController@destroy', $post->id],'files'=>true]) !!}

                        {{Form::submit('حذف',['class'=>'btn btn-danger'])}}
                        {!! Form::close() !!}

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <ul class="pagination justify-content-center mb-4">
            {{$posts->links()}}
        </ul>

    @else
        <h2 class="text-center">لايوجد تدوينات</h2>

    @endif
    <br>
    <a href="{{route('posts.create')}}"><button class="btn btn-danger btn-block">اضافة تدوينة </button></a>

@endsection
