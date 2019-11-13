@extends('frontend.layouts.master')
@section('title')
    Home
@endsection
@section('content')
    <section>
        <div class="container">
            <div class="slider">
                <div class="row">
                    <div class="col-8">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100"
                                        src="https://cf.shopee.vn/file/0fca146a5e289e10e1c073ee9d2463c7_xhdpi"
                                        alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100"
                                        src="https://cf.shopee.vn/file/0d0da085c0f5adcc8452756364dd2e65_xxhdpi"
                                        alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100"
                                        src="https://cf.shopee.vn/file/a5f7477808fc81be6117de929592c04b_xxhdpi   "
                                        alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 ">
                        <img src="http://cf.shopee.vn/file/70ec17dc2943c6cd28fb7f2e74b82556_xhdpi" alt="">
                        <img src="http://cf.shopee.vn/file/0fca146a5e289e10e1c073ee9d2463c7_xhdpi" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="menu background slider">
                @foreach ($categories as $category)
                    <div class="sl">
                        <i class="fa fa-gamepad" aria-hidden="true"></i>
                        <a href="{{ Route('get_loaisp', ['id' => $category->id]) }}"><p class="text2">{{$category->name}}</p></a>
                    </div>
                @endforeach
            </div>
            <div class="banner2">
            </div>
        </div>
    </section>
    <section>
        <div class="container background">
            <div class="sale1">Sale</div>

            <div class="product slider">
                @foreach ($products as $product)
                <div class="pro">
                        <div class="proimg">
                            <img src="https://www.dangquangwatch.vn/upload/product_small/1717990322_%C4%91%E1%BB%93ng-h%E1%BB%93-ch%C4%A9nh-h%C3%A3ng-4.jpg"
                                alt="">
                        </div>
                        <a href=" {{ Route('pro_detail', ['id' => $product->id])}}"><p class="proname">{{ $product->name}}</p></a>
                        <a href="{{ Route('addCart', ['id' => $product->id]) }}"><button class="btn btn-info">Add to cart</button></a>
                    </div>
                @endforeach
                
                
            </div>

        </div>
        </div>
    </section>
@endsection
