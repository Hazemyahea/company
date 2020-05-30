@extends('layouts.admin-master')

@section('content')
    <hr>
    <h2 class="text-center h1 admin-title">الاعضاء</h2>
    <br>
    @if(Session::has('success'))

        <div class="alert alert-success text-center">{{Session::get('success')}} </div>
    @endif

    <br>
    @if(count($users) > 0)
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">الاسم </th>
                <th scope="col">البريد الالكترونى</th>
                <th scope="col">الصورة</th>
                <th scope="col">وقت الانشاء</th>
                <th scope="col">أخر تعديل</th>
                <th scope="col">تعديل </th>
                <th scope="col">حذف</th>

            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>

                    <td> <img width="100" src="{{$user->photo->photo}}" alt=""> </td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td><a href="{{route('users.edit',$user->id)}}"><button class="btn btn-primary">تعديل</button></a></td>

                    <td>

                        {!! Form::open(['method' => 'DELETE','action'=>['UserController@destroy', $user->id],'files'=>true]) !!}

                        {{Form::submit('حذف',['class'=>'btn btn-danger'])}}
                        {!! Form::close() !!}

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <ul class="pagination justify-content-center mb-4">
            {{$users->links()}}
        </ul>

    @else
        <h2 class="text-center">لايوجد اعضاء</h2>

    @endif
    <br>
    <a href="{{route('users.create')}}"><button class="btn btn-danger btn-block">اضافة عضو </button></a>

@endsection
