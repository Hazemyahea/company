<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title> Afkark Online | Web Developmnet </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6ce4a67753.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>

<div class="admin">
    <div class="row">
        <div class="col-lg-3 text-center">
            <div class="id-admin" style="width: 18rem;">
                <img class="img-fluid" height="150px" width="200px" src="{{auth()->user()->photo->photo}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="title text-center">{{auth()->user()->name}}</h5>
                    <ul>
                        <li> <a href="{{route('index')}}">الرئيسية</a></li>
                        <li> <a href="{{route('users.index')}}">الاعضاء</a> </li>
                        <li> <a href="{{route('orders.index')}}">طلبات التواصل</a></li>
                        <li> <a href="{{route('products.index')}}">المنتجات</a></li>
                        <li> <a href="{{route('categories.index')}}">اقسام المنتجات</a></li>
                        <li> <a href="{{route('posts.index')}}">ادارة المدونة</a> </li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-8 admin-content">


                @yield('content')

        </div>
    </div>



</div>





<script src="js/main.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
