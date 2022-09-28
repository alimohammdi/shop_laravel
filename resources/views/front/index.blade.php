@extends('front.layouts.master')
@section('title','تاپ کالا')
@section('content')
<main class="main default">
    <div class="container">
        <!-- banner -->
        <div class="row banner-ads">
            <div class="col-12">
                <section class="banner">
                    <a href="#">
                        <img src="assets/img/banner/banner.jpg" alt="">
                    </a>
                </section>
            </div>
        </div>
        <!-- banner -->
        <div class="row">
            @include('front.partials.sidebar')
            <div class="col-12 col-lg-9 order-1 order-lg-2">
                @include('front.partials.slider')
                @include('front.partials.slider-amazing')
                <div class="row" id="amazing-slider-responsive">
                    <div class="col-12">
                        <div class="widget widget-product card">
                            <header class="card-header">
                                <img src="assets/img/amazing-slider/amazing-title-01.png" width="150px" alt="">
                                <a href="#" class="view-all">مشاهده همه</a>
                            </header>
                            <div class="product-carousel owl-carousel owl-theme">
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/60eb20-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۱٫۶ اینچی دل مدل INSPIRON 3168 -AC B</a>
                                    </h2>
                                    <div class="price">
                                        <ins><span>4,180,000<span>تومان</span></span></ins>
                                    </div>
                                    <hr>
                                    <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                        <span data-days>0</span>:
                                        <span data-hours>0</span>:
                                        <span data-minutes>0</span>:
                                        <span data-seconds>0</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/4ff777-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۴ اینچی دل مدل vostro 5471</a>
                                    </h2>
                                    <div class="price">
                                        <ins><span>6,580,000<span>تومان</span></span></ins>
                                    </div>
                                    <hr>
                                    <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                        <span data-days>0</span>:
                                        <span data-hours>0</span>:
                                        <span data-minutes>0</span>:
                                        <span data-seconds>0</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/35a2b8-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل Latitude 5580</a>
                                    </h2>
                                    <div class="price">
                                        <ins><span>4,699,000<span>تومان</span></span></ins>
                                    </div>
                                    <hr>
                                    <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                        <span data-days>0</span>:
                                        <span data-hours>0</span>:
                                        <span data-minutes>0</span>:
                                        <span data-seconds>0</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/9b3da9-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 15-3567 - I</a>
                                    </h2>
                                    <div class="price">
                                        <ins><span>2,780,000<span>تومان</span></span></ins>
                                    </div>
                                    <hr>
                                    <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                        <span data-days>0</span>:
                                        <span data-hours>0</span>:
                                        <span data-minutes>0</span>:
                                        <span data-seconds>0</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/c8297f-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 7577 - D</a>
                                    </h2>
                                    <div class="price">
                                        <ins><span>8,899,000<span>تومان</span></span></ins>
                                    </div>
                                    <hr>
                                    <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                        <span data-days>0</span>:
                                        <span data-hours>0</span>:
                                        <span data-minutes>0</span>:
                                        <span data-seconds>0</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/a579bb-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل Inspiron 15-5570 - B</a>
                                    </h2>
                                    <div class="price">
                                        <ins><span>4,279,000<span>تومان</span></span></ins>
                                    </div>
                                    <hr>
                                    <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                        <span data-days>0</span>:
                                        <span data-hours>0</span>:
                                        <span data-minutes>0</span>:
                                        <span data-seconds>0</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/19a2cc-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل XPS 15-9560</a>
                                    </h2>
                                    <div class="price">
                                        <ins><span>18,450,000<span>تومان</span></span></ins>
                                    </div>
                                    <hr>
                                    <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                        <span data-days>0</span>:
                                        <span data-hours>0</span>:
                                        <span data-minutes>0</span>:
                                        <span data-seconds>0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row banner-ads">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6 col-lg-3">
                                <div class="widget-banner card">
                                    <a href="#" target="_blank">
                                        <img class="img-fluid" src="assets/img/banner/banner-1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="widget-banner card">
                                    <a href="#" target="_top">
                                        <img class="img-fluid" src="assets/img/banner/banner-2.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="widget-banner card">
                                    <a href="#" target="_top">
                                        <img class="img-fluid" src="assets/img/banner/banner-3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="widget-banner card">
                                    <a href="#" target="_top">
                                        <img class="img-fluid" src="assets/img/banner/banner-4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="widget widget-product card">
                            <header class="card-header">
                                <h3 class="card-title">
                                    <span>جدید ترین محصولات</span>
                                </h3>
                                <a href="#" class="view-all">مشاهده همه</a>
                            </header>
                            <div class="product-carousel owl-carousel owl-theme">
                               @foreach($products as $product)
                                    <div class="item">
                                        <a href="{{route('single.products',['product'=>$product->id])}}">
                                            <img src="{{ asset('images/products/'.$product->image) }}"
                                                 class="img-fluid" alt="{{ $product->title }}">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="{{route('single.products',['product'=>$product->id])}}"> {{ $product->title }}</a>
                                        </h2>
                                        <div class="price">
                                            <div class="text-center">
                                                <del><span>{{ $product->price }}<span>تومان</span></span></del>
                                            </div>
                                            <div class="text-center">
                                                <ins><span>{{ number_format($product->price) }}<span>تومان</span></span></ins>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="widget widget-product card">
                            <header class="card-header">
                                <h3 class="card-title">
                                    <span>کامپیوتر و لوازم جانبی</span>
                                </h3>
                                <a href="#" class="view-all">مشاهده همه</a>
                            </header>
                            <div class="product-carousel owl-carousel owl-theme">
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/60eb20-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۱٫۶ اینچی دل مدل INSPIRON 3168 -AC B</a>
                                    </h2>
                                    <div class="price">
                                        <del><span>4,299,000<span>تومان</span></span></del>
                                        <ins><span>4,180,000<span>تومان</span></span></ins>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/4ff777-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۴ اینچی دل مدل vostro 5471</a>
                                    </h2>
                                    <div class="price">
                                        <del><span>6,890,000<span>تومان</span></span></del>
                                        <ins><span>6,580,000<span>تومان</span></span></ins>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/35a2b8-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل Latitude 5580</a>
                                    </h2>
                                    <div class="price">
                                        <del><span>4,799,000<span>تومان</span></span></del>
                                        <ins><span>4,699,000<span>تومان</span></span></ins>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/9b3da9-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 15-3567 - I</a>
                                    </h2>
                                    <div class="price">
                                        <span>2,780,000<span>تومان</span></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/c8297f-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 7577 - D</a>
                                    </h2>
                                    <div class="price">
                                        <del><span>8,999,000<span>تومان</span></span></del>
                                        <ins><span>8,899,000<span>تومان</span></span></ins>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/a579bb-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل Inspiron 15-5570 - B</a>
                                    </h2>
                                    <div class="price">
                                        <span>4,279,000<span>تومان</span></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/19a2cc-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل XPS 15-9560</a>
                                    </h2>
                                    <div class="price">
                                        <span>18,450,000<span>تومان</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row banner-ads">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="widget-banner card">
                                    <a href="#" target="_blank">
                                        <img class="img-fluid" src="assets/img/banner/banner-9.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="widget-banner card">
                                    <a href="#" target="_top">
                                        <img class="img-fluid" src="assets/img/banner/banner-10.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="widget widget-product card">
                            <header class="card-header">
                                <h3 class="card-title">
                                    <span>کامپیوتر و لوازم جانبی</span>
                                </h3>
                                <a href="#" class="view-all">مشاهده همه</a>
                            </header>
                            <div class="product-carousel owl-carousel owl-theme">
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/60eb20-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۱٫۶ اینچی دل مدل INSPIRON 3168 -AC B</a>
                                    </h2>
                                    <div class="price">
                                        <del><span>4,299,000<span>تومان</span></span></del>
                                        <ins><span>4,180,000<span>تومان</span></span></ins>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/4ff777-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۴ اینچی دل مدل vostro 5471</a>
                                    </h2>
                                    <div class="price">
                                        <del><span>6,890,000<span>تومان</span></span></del>
                                        <ins><span>6,580,000<span>تومان</span></span></ins>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/35a2b8-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل Latitude 5580</a>
                                    </h2>
                                    <div class="price">
                                        <del><span>4,799,000<span>تومان</span></span></del>
                                        <ins><span>4,699,000<span>تومان</span></span></ins>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/9b3da9-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 15-3567 - I</a>
                                    </h2>
                                    <div class="price">
                                        <span>2,780,000<span>تومان</span></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/c8297f-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 7577 - D</a>
                                    </h2>
                                    <div class="price">
                                        <del><span>8,999,000<span>تومان</span></span></del>
                                        <ins><span>8,899,000<span>تومان</span></span></ins>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/a579bb-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل Inspiron 15-5570 - B</a>
                                    </h2>
                                    <div class="price">
                                        <span>4,279,000<span>تومان</span></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/19a2cc-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل XPS 15-9560</a>
                                    </h2>
                                    <div class="price">
                                        <span>18,450,000<span>تومان</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="widget widget-product card">
                            <header class="card-header">
                                <h3 class="card-title">
                                    <span>کامپیوتر و لوازم جانبی</span>
                                </h3>
                                <a href="#" class="view-all">مشاهده همه</a>
                            </header>
                            <div class="product-carousel owl-carousel owl-theme">
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/60eb20-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۱٫۶ اینچی دل مدل INSPIRON 3168 -AC B</a>
                                    </h2>
                                    <div class="price">
                                        <del><span>4,299,000<span>تومان</span></span></del>
                                        <ins><span>4,180,000<span>تومان</span></span></ins>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/4ff777-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۴ اینچی دل مدل vostro 5471</a>
                                    </h2>
                                    <div class="price">
                                        <del><span>6,890,000<span>تومان</span></span></del>
                                        <ins><span>6,580,000<span>تومان</span></span></ins>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/35a2b8-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل Latitude 5580</a>
                                    </h2>
                                    <div class="price">
                                        <del><span>4,799,000<span>تومان</span></span></del>
                                        <ins><span>4,699,000<span>تومان</span></span></ins>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/9b3da9-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 15-3567 - I</a>
                                    </h2>
                                    <div class="price">
                                        <span>2,780,000<span>تومان</span></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/c8297f-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 7577 - D</a>
                                    </h2>
                                    <div class="price">
                                        <del><span>8,999,000<span>تومان</span></span></del>
                                        <ins><span>8,899,000<span>تومان</span></span></ins>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/a579bb-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل Inspiron 15-5570 - B</a>
                                    </h2>
                                    <div class="price">
                                        <span>4,279,000<span>تومان</span></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/19a2cc-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل XPS 15-9560</a>
                                    </h2>
                                    <div class="price">
                                        <span>18,450,000<span>تومان</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row banner-ads">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="widget widget-banner card">
                                    <a href="#" target="_blank">
                                        <img class="img-fluid" src="assets/img/banner/banner-11.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="widget widget-product card">
                            <header class="card-header">
                                <h3 class="card-title">
                                    <span>کامپیوتر و لوازم جانبی</span>
                                </h3>
                                <a href="#" class="view-all">مشاهده همه</a>
                            </header>
                            <div class="product-carousel owl-carousel owl-theme">
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/60eb20-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۱٫۶ اینچی دل مدل INSPIRON 3168 -AC B</a>
                                    </h2>
                                    <div class="price">
                                        <del><span>4,299,000<span>تومان</span></span></del>
                                        <ins><span>4,180,000<span>تومان</span></span></ins>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/4ff777-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۴ اینچی دل مدل vostro 5471</a>
                                    </h2>
                                    <div class="price">
                                        <del><span>6,890,000<span>تومان</span></span></del>
                                        <ins><span>6,580,000<span>تومان</span></span></ins>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/35a2b8-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل Latitude 5580</a>
                                    </h2>
                                    <div class="price">
                                        <del><span>4,799,000<span>تومان</span></span></del>
                                        <ins><span>4,699,000<span>تومان</span></span></ins>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/9b3da9-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 15-3567 - I</a>
                                    </h2>
                                    <div class="price">
                                        <span>2,780,000<span>تومان</span></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/c8297f-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 7577 - D</a>
                                    </h2>
                                    <div class="price">
                                        <del><span>8,999,000<span>تومان</span></span></del>
                                        <ins><span>8,899,000<span>تومان</span></span></ins>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/a579bb-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل Inspiron 15-5570 - B</a>
                                    </h2>
                                    <div class="price">
                                        <span>4,279,000<span>تومان</span></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="assets/img/product-slider/19a2cc-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">لپ تاپ ۱۵ اینچی دل مدل XPS 15-9560</a>
                                    </h2>
                                    <div class="price">
                                        <span>18,450,000<span>تومان</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('front.partials.brands')
    </div>
</main>
@endsection
