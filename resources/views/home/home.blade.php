@extends('layouts.home-master')
@section('content')

    <!-- Start Header  -->



    <header>
        <div class="over-lay">
            <div class="container">
                <h1 class="text-center">{{trans('website.head')}}</h1>
            </div>
        </div>
    </header>

    <!-- End Header  -->

    <!-- Start who us -->
    <div class="who">
        <div class="container">
            <h3 class="text-center"> {{trans('website.who')}} </h3>
            <div class="row">
                <div class="col-lg-6">
                    <div class="us">
                        <p class="text-center">{{trans('website.who.about')}}</p>
                        <p class="text-center"> {{trans('website.who.about2')}} </p>
                        <button class="btn btn-primary btn-lg btn-block" type="button" name="button"> <a href="#">احصل على بوابة تعقيم</a> </button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img">
                        <img class="img-fluid rounded " src="images/sterilization-gate-4.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End How Us  -->
    <!-- Srart we  -->
    <div class="we">
        <div class="container">
            <h2 class="h1 text-center">{{trans('website.guarantee')}}</h2>
            <div class="row">
                <div class="col-lg-3">
                    <h4>{{trans('website.warranty')}}</h4>
                    <i class="fas fa-bookmark"></i>
                    <p>{{trans('website.5years')}}</p>
                </div>
                <div class="col-lg-3">
                    <h4>{{trans('website.protection')}}</h4>
                    <i class="fas fa-user-shield"></i>
                    <p>{{trans('website.protectionP')}}</p>
                </div>
                <div class="col-lg-3">
                    <h4>{{trans('website.quality')}}</h4>
                    <i class="fas fa-brain"></i>
                    <p>{{trans('website.qualityP')}}</p>
                </div>
                <div class="col-lg-3">
                    <h4>{{trans('website.prices')}}</h4>
                    <i class="fas fa-search-dollar"></i>
                    <p>{{trans('website.pricesP')}}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Srart we  -->

    <!-- Srart good  -->

    <div class="good">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-4 shop-item">
                    <h3 class="text-center">{{$product->title}}</h4>
                        <img style="height: 400px" width="300" src="{{$product->photo->photo}}" alt="">
                        <h5 class="price">{{$product->price}} جنية</h5>
                </div>
                    @endforeach

                <div class="col-lg-12">
                    <h3 class="text-center">{{trans('website.ourshop')}}</h3>
                    <h4 class="text-center button"> <a href="{{route('home.store')}}">{{trans('website.shop')}}</a> </h4>
                </div>
            </div>

        </div>
    </div>
    <!-- End good  -->

    <!-- Start Contact Us  -->
    <div class="contact">
        @if(Session::has('done'))

            <div class="alert alert-success text-center container">{{Session::get('done')}} </div>
        @endif

        <div class="container">
            <h2 class="h1 text-center">{{trans('website.contact')}}</h2>
            {!! Form::open(['method' => 'post','action'=>'HomeController@Contact','files'=>true]) !!}
                <div class="form-group">
                    <input class="form-control" type="text" name="name" value="" placeholder="{{trans('website.name')}}">
                </div>
            @error('name')
            <div class="alert alert-danger text-center"> {{$message}}</div>
            @enderror
                <div class="form-group">
                    <input class="form-control" type="email" name="email" value="" placeholder="{{trans('website.email')}}">
                </div>
            @error('email')
            <div class="alert alert-danger text-center"> {{$message}}</div>
            @enderror
                <div class="form-group">
                    <textarea class="form-control" name="body" rows="8" cols="80" placeholder="{{trans('website.message')}}"></textarea>
                </div>
            @error('body')
            <div class="alert alert-danger text-center"> {{$message}}</div>
            @enderror
                <input class="btn btn-success btn-block" type="submit" name="" value="{{trans('website.send')}}">
            {!! Form::close() !!}
        </div>
    </div>

    <!-- End Contact Us  -->

@endsection
