@extends('layouts.main')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('assets1/images/hero_1.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets1/images/hero_1.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets1/images/hero_1.jpg')}}" class=" d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


{{-- <div class="site-blocks-cover" style="background-image: url('assets1/images/hero_1.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
                <div class="site-block-cover-content text-center">
                    <h2 class="sub-title">Effective Medicine, New Medicine Everyday</h2>
                    <h1>Welcome To Pharma</h1>
                    <p>
                        <a href="#" class="btn btn-primary px-5 py-3">Shop Now</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row align-items-stretch section-overlap">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="banner-wrap bg-primary h-100">
                    <a href="#" class="h-100">
                        <h5>Free <br> Shipping</h5>
                        <p>
                            Amet sit amet dolor
                            <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="banner-wrap h-100">
                    <a href="#" class="h-100">
                        <h5>Season <br> Sale 50% Off</h5>
                        <p>
                            Amet sit amet dolor
                            <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="banner-wrap bg-warning h-100">
                    <a href="#" class="h-100">
                        <h5>Buy <br> A Gift Card</h5>
                        <p>
                            Amet sit amet dolor
                            <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                        </p>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="title-section text-center col-12">
                <h2 class="text-uppercase">Popular Products</h2>
            </div>
        </div>

        <div class="row">
            @foreach ($obats as $obat)
            <div class="col-sm-6 col-lg-4 text-center item mb-4">
                <span class="tag">Sale</span>
                <a href="{{route('singleShop',$obat->slug)}}"> <img src="{{$obat->image()}}"
                        style="width: 270px; height:370px;" alt="Image"></a>
                <h3 class="text-dark"><a href="{{route('singleShop',$obat->slug)}}">{{$obat->nama_obat}}</a></h3>
                <p class="price"> Rp.{{number_format($obat->harga,0,'.','')}}&mdash;</p>
            </div>
            @endforeach
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="shop.html" class="btn btn-primary px-4 py-3">View All Products</a>
            </div>
        </div>
    </div>
</div>


<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="title-section text-center col-12">
                <h2 class="text-uppercase">New Products</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 block-3 products-wrap">
                <div class="nonloop-block-3 owl-carousel">

                    <div class="text-center item mb-4">
                        <a href="shop-single.html"> <img src="{{asset('assets1/images/product_03.png')}}"
                                alt="Image"></a>
                        <h3 class="text-dark"><a href="shop-single.html">Umcka Cold Care</a></h3>
                        <p class="price">$120.00</p>
                    </div>

                    <div class="text-center item mb-4">
                        <a href="shop-single.html"> <img src="{{asset('assets1/images/product_01.png')}}"
                                alt="Image"></a>
                        <h3 class="text-dark"><a href="shop-single.html">Umcka Cold Care</a></h3>
                        <p class="price">$120.00</p>
                    </div>

                    <div class="text-center item mb-4">
                        <a href="shop-single.html"> <img src="{{asset('assets1/images/product_02.png')}}"
                                alt="Image"></a>
                        <h3 class="text-dark"><a href="shop-single.html">Umcka Cold Care</a></h3>
                        <p class="price">$120.00</p>
                    </div>

                    <div class="text-center item mb-4">
                        <a href="shop-single.html"> <img src="{{asset('assets1/images/product_04.png')}}"
                                alt="Image"></a>
                        <h3 class="text-dark"><a href="shop-single.html">Umcka Cold Care</a></h3>
                        <p class="price">$120.00</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="title-section text-center col-12">
                <h2 class="text-uppercase">Testimonials</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 block-3 products-wrap">
                <div class="nonloop-block-3 no-direction owl-carousel">

                    <div class="testimony">
                        <blockquote>
                            <img src="{{asset('assets1/images/person_1.jpg')}}" alt="Image"
                                class="img-fluid w-25 mb-4 rounded-circle">
                            <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis
                                voluptatem consectetur quam tempore obcaecati maiores voluptate aspernatur iusto
                                eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat unde.&rdquo;
                            </p>
                        </blockquote>

                        <p>&mdash; Kelly Holmes</p>
                    </div>

                    <div class="testimony">
                        <blockquote>
                            <img src="{{asset('assets1/images/person_2.jpg')}}" alt="Image"
                                class="img-fluid w-25 mb-4 rounded-circle">
                            <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis
                                voluptatem consectetur quam tempore
                                obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur
                                ducimus. Minus ratione sit quaerat
                                unde.&rdquo;</p>
                        </blockquote>

                        <p>&mdash; Rebecca Morando</p>
                    </div>

                    <div class="testimony">
                        <blockquote>
                            <img src="{{asset('assets1/images/person_3.jpg')}}" alt="Image"
                                class="img-fluid w-25 mb-4 rounded-circle">
                            <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis
                                voluptatem consectetur quam tempore
                                obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur
                                ducimus. Minus ratione sit quaerat
                                unde.&rdquo;</p>
                        </blockquote>

                        <p>&mdash; Lucas Gallone</p>
                    </div>

                    <div class="testimony">
                        <blockquote>
                            <img src="{{asset('assets1/images/person_4.jpg')}}" alt="Image"
                                class="img-fluid w-25 mb-4 rounded-circle">
                            <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis
                                voluptatem consectetur quam tempore
                                obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur
                                ducimus. Minus ratione sit quaerat
                                unde.&rdquo;</p>
                        </blockquote>

                        <p>&mdash; Andrew Neel</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="site-section bg-secondary bg-image" style="background-image: url('assets1/images/bg_2.jpg');">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('assets1/images/bg_1.jpg');">
                    <div class="banner-1-inner align-self-center">
                        <h2>Jagalah Kesehatan Dengan Minum Obat</h2>
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0">
                <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('assets1/images/bg_2.jpg');">
                    <div class="banner-1-inner ml-auto  align-self-center">
                        <h2>Jagalah Kesehatan Dengan Hidup Teratur</h2>
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection