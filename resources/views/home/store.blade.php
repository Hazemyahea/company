@extends('layouts.home-master')

@section('content')

    <!-- Start Header  -->



    <header class="header-shop">
        <div class="over-lay-shop">
            <div class="container">
                <h1  class="text-center text-shop">{{trans('website.shop')}}</h1>
            </div>
        </div>
    </header>

    <!-- End Header  -->

    <!-- Start Shop -->
    <div class="shop">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 shop-main">
                    <h3 class="head-shop text-center">{{trans('website.sections')}}</h3>
                    <ul class="text-center">

                        @foreach($categories as $category)
                            <li>
                                <a href="{{route('home.category',$category->id)}}">{{$category->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                @foreach($products as $product)
                <div class="col-lg-4 shop-item">
                    <h3 class="text-center">{{$product->title}} </h3>
                    <img style="height: 400px" width="300" src="{{$product->photo->photo}}" alt="">
                    <h5 class="price">{{$product->price}} {{trans('website.price')}}</h5>
                </div>
                @endforeach


            </div>
        </div>

    </div>





    <!-- End Shop -->


@endsection
