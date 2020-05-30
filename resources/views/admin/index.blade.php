@extends('layouts.admin-master')

@section('content')

    <div class="row">
    <div class="members col-lg-3 text-center">
        <h4>الاعضاء</h4>
        <i class="fas fa-user icon fa-4x"></i>
        <br>
        <h3>{{count($users)}}</h3>
    </div>
        <div class="orders col-lg-3 text-center">
            <h4>طلبات التواصل</h4>
            <i class="fas fa-user icon fa-4x"></i>
            <br>
            <h3>{{count($orders)}}</h3>
        </div>
        <div class="blogs col-lg-3 text-center">
            <h4>التدوينات</h4>
            <i class="fas fa-user icon fa-4x"></i>
            <br>
            <h3>{{count($the_posts)}}</h3>
        </div>
        <div class="productss col-lg-3 text-center">
            <h4>المنتجات</h4>
            <i class="fas fa-user icon fa-4x"></i>
            <br>
            <h3>{{count($products)}}</h3>
        </div>

    </div>

    <div class="row">
       <div class="col-lg-12 posts">
       <h2 style="padding: 10px; background-color: antiquewhite">اخر التدوينات</h2>
           @foreach($posts as $post)
           <h4 style="padding: 4px;">{{$post->title}}</h4>

           @endforeach
       </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12 text-center ">
            <h2  class="orders">اخر الطلبات</h2>
            @foreach($the_orders as $order)
                <h4 style="padding: 4px;">{{ Str::limit($order->body,50)}}  {{$order->created_at->toDateString()}}</h4>

            @endforeach
        </div>
    </div>

@endsection

