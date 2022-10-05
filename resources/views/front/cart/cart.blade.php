@extends('front.layouts.master')
@section('title','سبد خرید')
@section('content')
    @php

            $allPriceProduct = 0;
            $countProduct =0;
    @endphp
    <!-- main -->
    <main class="cart-page default">
        <div class="container">
            <div class="row">
                <div class="cart-page-content col-xl-9 col-lg-8 col-md-12 order-1">
                    <div class="cart-page-title">
                        <h1>سبد خرید</h1>
                    </div>

                    <div class="table-responsive checkout-content default">
                        <table class="table">
                            <tbody>
                            <tr  class="checkout-item">
                                <td></td>
                                <td>نام محصول </td>
                                <td>تعداد</td>
                                <td>مبلغ</td>
                            </tr>
                            @if(isset($basket))
                            @forelse($products as $pro)
                                <tr class="checkout-item">
                                    @php
                                    $allPriceProduct +=  $pro->quantity >= 1 ?   $pro->product->price * $pro->quantity   :    $pro->quantity ;
                                    $countProduct += 1;
                                    @endphp
                                    <td>
                                        <img src="{{ asset('images/products/'.$pro->product->image) }}" width="100px" height="100px" alt="">
                                        <form action="{{ route('cart.destroy',['id'=>$pro->id]) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="checkout-btn-remove hover-danger" ></button>
                                        </form>
                                    </td>
                                    <td>
                                        <h3 class="checkout-title">
                                            {{ $pro->product->title }}
                                        </h3>
                                    </td>
                                    <td>{{ $pro->quantity }}</td>
                                    <td>{{  $pro->quantity >= 1 ?  number_format($pro->product->price * $pro->quantity)  :    number_format($pro->quantity) }} تومان</td>
                                </tr>
                            @empty
                                <tr class="checkout-item">
                                    <td> <span class="text-color-red"> محصولی در سبد خرید شما موجود نیست </span></td>
                                </tr>

                            @endforelse
                                @else
                                <tr class="checkout-item">
                                    <td> <span class="text-color-red"> محصولی در سبد خرید شما موجود نیست </span></td>
                                </tr>

                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <aside class="cart-page-aside col-xl-3 col-lg-4 col-md-6 center-section order-2">
                    <div class="checkout-aside">
                        <div class="checkout-summary">
                            <div class="checkout-summary-main">
                                <ul class="checkout-summary-summary">
                                    <li><span>مبلغ کل ({{ $countProduct }} کالا)</span><span>{{number_format($allPriceProduct)}}</span></li>
                                    <li>
                                        <span>هزینه ارسال : {{ number_format(0) }} تومان </span>
{{--                                        <span>وابسته به آدرس<span class="wiki wiki-holder"><span--}}
{{--                                                    class="wiki-sign"></span>--}}
                                                    <div class="wiki-container js-dk-wiki is-right">
                                                        <div class="wiki-arrow"></div>
                                                        <p class="wiki-text">
                                                            هزینه ارسال مرسولات می‌تواند وابسته به شهر و آدرس گیرنده
                                                            متفاوت باشد. در
                                                            صورتی که هر
                                                            یک از مرسولات حداقل ارزشی برابر با ۱۰۰هزار تومان داشته باشد،
                                                            آن مرسوله
                                                            بصورت رایگان
                                                            ارسال می‌شود.<br>
                                                            "حداقل ارزش هر مرسوله برای ارسال رایگان، می تواند متغیر
                                                            باشد."
                                                        </p>
                                                    </div>
                                                </span></span>
                                    </li>
                                </ul>
                                <div class="checkout-summary-devider">
                                    <div></div>
                                </div>
                                <div class="checkout-summary-content">
                                    <div class="checkout-summary-price-title">مبلغ قابل پرداخت:</div>
                                    <div class="checkout-summary-price-value">
                                        <span class="checkout-summary-price-value-amount">{{  $allPriceProduct != null ? number_format($allPriceProduct) :  ' 0 '}}</span>تومان
                                    </div>
                                   @if(isset($basket))
                                        <a href="{{ route('payment.product',$basket->id) }}" class="selenium-next-step-shipping">
                                            <div class="parent-btn">
                                                <button class="dk-btn dk-btn-info">
                                                    پرداخت سفارش
                                                    <i class="now-ui-icons shopping_basket"></i>
                                                </button>
                                            </div>
                                        </a>
                                       @else
                                        <a href="#" class="selenium-next-step-shipping">
                                            <div class="parent-btn">
                                                <button class="dk-btn dk-btn-info">
                                                    مبلغی برای پرداخت موجود نیست
                                                    <i class="now-ui-icons shopping_basket"></i>
                                                </button>
                                            </div>
                                        </a>
                                    @endif
                                    <div>
                                            <span>
                                                کالاهای موجود در سبد شما ثبت و رزرو نشده‌اند، برای ثبت سفارش مراحل بعدی
                                                را تکمیل
                                                کنید.
                                            </span>
                                        <span class="wiki wiki-holder"><span class="wiki-sign"></span>
                                                <div class="wiki-container is-right">
                                                    <div class="wiki-arrow"></div>
                                                    <p class="wiki-text">
                                                        محصولات موجود در سبد خرید شما تنها در صورت ثبت و پرداخت سفارش
                                                        برای شما رزرو
                                                        می‌شوند. در
                                                        صورت عدم ثبت سفارش، تاپ کالا هیچگونه مسئولیتی در قبال تغییر
                                                        قیمت یا موجودی
                                                        این کالاها
                                                        ندارد.
                                                    </p>
                                                </div>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-feature-aside">
                            <ul>
                                <li class="checkout-feature-aside-item checkout-feature-aside-item-guarantee">
                                    هفت روز
                                    ضمانت تعویض
                                </li>
                                <li class="checkout-feature-aside-item checkout-feature-aside-item-cash">
                                    پرداخت در محل با
                                    کارت بانکی
                                </li>
                                <li class="checkout-feature-aside-item checkout-feature-aside-item-express">
                                    تحویل اکسپرس
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>
    <!-- main -->
@endsection
