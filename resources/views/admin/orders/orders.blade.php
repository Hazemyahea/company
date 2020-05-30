@extends('layouts.admin-master')

@section('content')
    <hr>
    <h2 class="text-center h1 admin-title">الطلبات</h2>
    <br>
    @if(Session::has('success'))

        <div class="alert alert-success text-center">{{Session::get('success')}} </div>
    @endif

    <br>
    @if(count($orders) > 0)
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">الاسم </th>
                <th scope="col">البريد الالكترونى</th>
                <th scope="col">الرسالة</th>
                <th scope="col">وقت الانشاء</th>
                <th scope="col">حذف</th>

            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <th scope="row">{{$order->id}}</th>
                    <td>{{$order->name}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{Str::limit($order->body,50)}}</td>
                    <td>{{$order->created_at}}</td>
                    <td>
                        {!! Form::open(['method' => 'DELETE','action'=>['OrdersController@destroy', $order->id],'files'=>true]) !!}

                        {{Form::submit('حذف',['class'=>'btn btn-danger'])}}
                        {!! Form::close() !!}

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <ul class="pagination justify-content-center mb-4">
            {{$orders->links()}}
        </ul>

    @else
        <h2 class="text-center">لايوجد رسائل</h2>

    @endif
    <br>

@endsection
