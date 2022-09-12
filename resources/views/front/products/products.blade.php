@extends('front.layouts.master')
@section('title','تاپ کالا')
@section('content')
<!-- main -->
    <main class="search-page default">
        <div class="container">
            <div class="row">
               @include('front.products.sidebar-products-page')
                <div class="col-12 col-sm-12 col-md-8 col-lg-9 order-2">
                    <div class="breadcrumb-section default">
                        <ul class="breadcrumb-list">
                            <li>
                                <a href="#">
                                    <span>فروشگاه اینترنتی تاپ کالا</span>
                                </a>
                            </li>
                            <li><span>جستجوی موبایل</span></li>
                        </ul>
                    </div>
                    <div class="listing default">
                        <div class="listing-counter">۶,۱۸۸ کالا</div>
                        <div class="listing-header default">
                            <ul class="listing-sort nav nav-tabs justify-content-center" role="tablist"
                                data-label="مرتب‌سازی بر اساس :">
                                <li>
                                    <a class="active" data-toggle="tab" href="#related" role="tab"
                                       aria-expanded="false">مرتبط‌ترین</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#most-view" role="tab"
                                       aria-expanded="false">پربازدیدترین</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#new" role="tab" aria-expanded="true">جدیدترین</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#most-seller" role="tab"
                                       aria-expanded="false">پرفروش‌ترین‌</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#down-price" role="tab"
                                       aria-expanded="false">ارزان‌ترین</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#top-price" role="tab"
                                       aria-expanded="false">گران‌ترین</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content default text-center">
{{--                             مرتبط‌ترین--}}
                            <div class="tab-pane active" id="related" role="tabpanel" aria-expanded="true">
                                <div class="container no-padding-right">
                                    <ul class="row listing-items">
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/2310961.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل هوآوی مدل Y7 Prime 2018 دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۲,۳۷۸,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/3694075.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل هوآوی مدل Nova 3i INE-LX1M دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۴,۱۳۹,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/1335154.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل اپل مدل iPhone X ظرفیت 256 گیگابایت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۱۵,۳۹۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/4560651.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل اپل مدل Apple iPhone XS تک سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۱۷,۳۴۹,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/5489258.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل سامسونگ مدل j4 Plus J415 دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۲,۳۹۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/2196691.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل سامسونگ مدل J7 Pro SM-J730F
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۳,۳۰۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/2310961.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل هوآوی مدل Y7 Prime 2018 دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۲,۳۷۸,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/3694075.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل هوآوی مدل Nova 3i INE-LX1M دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۴,۱۳۹,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/1335154.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل اپل مدل iPhone X ظرفیت 256 گیگابایت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۱۵,۳۹۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/4560651.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل اپل مدل Apple iPhone XS تک سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۱۷,۳۴۹,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/5489258.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل سامسونگ مدل j4 Plus J415 دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۲,۳۹۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/2196691.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل سامسونگ مدل J7 Pro SM-J730F
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۳,۳۰۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
{{--                            پربازدیدترین--}}
                            <div class="tab-pane" id="most-view" role="tabpanel" aria-expanded="false">
                                <div class="container no-padding-right">
                                    <ul class="row listing-items">
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/4560651.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل اپل مدل Apple iPhone XS تک سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۱۷,۳۴۹,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/3694075.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل هوآوی مدل Nova 3i INE-LX1M دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۴,۱۳۹,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/1335154.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل اپل مدل iPhone X ظرفیت 256 گیگابایت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۱۵,۳۹۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/4560651.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل اپل مدل Apple iPhone XS تک سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۱۷,۳۴۹,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/5489258.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل سامسونگ مدل j4 Plus J415 دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۲,۳۹۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/2310961.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل هوآوی مدل Y7 Prime 2018 دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۲,۳۷۸,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/5489258.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل سامسونگ مدل j4 Plus J415 دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۲,۳۹۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/2196691.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل سامسونگ مدل J7 Pro SM-J730F
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۳,۳۰۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/2310961.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل هوآوی مدل Y7 Prime 2018 دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۲,۳۷۸,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/3694075.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل هوآوی مدل Nova 3i INE-LX1M دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۴,۱۳۹,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/1335154.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل اپل مدل iPhone X ظرفیت 256 گیگابایت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۱۵,۳۹۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/2196691.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل سامسونگ مدل J7 Pro SM-J730F
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۳,۳۰۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
{{--                            جدیدترین--}}
                            <div class="tab-pane" id="new" role="tabpanel" aria-expanded="false">
                                <div class="container no-padding-right">
                                    <ul class="row listing-items">
                                        @forelse($products as $pro)
                                            <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                                <div class="product-box">
                                                    <div
                                                        class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                        <span class="product-seller-details-badge-container"></span>
                                                    </div>
                                                    <a class="product-box-img" href="{{ route('single.products',['product'=>$pro->id]) }}">
                                                        <img src="{{ asset('images/products/'.$pro->image)  }}" alt="">
                                                    </a>
                                                    <div class="product-box-content">
                                                        <div class="product-box-content-row">
                                                            <div class="product-box-title">
                                                                <a href="#">
                                                                    {{ $pro->title }}
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box-row product-box-row-price">
                                                            <div class="price">
                                                                <div class="price-value">
                                                                    <div class="price-value-wrapper">
                                                                        {{ $pro->price }} <span
                                                                            class="price-currency">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @empty
                                        @endforelse
                                    </ul>
                                </div>
                            </div>


{{--                            پرفروش‌ترین‌--}}
                            <div class="tab-pane" id="most-seller" role="tabpanel" aria-expanded="false">
                                <div class="container no-padding-right">
                                    <ul class="row listing-items">
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/3694075.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل هوآوی مدل Nova 3i INE-LX1M دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۴,۱۳۹,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/2196691.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل سامسونگ مدل J7 Pro SM-J730F
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۳,۳۰۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/1335154.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل اپل مدل iPhone X ظرفیت 256 گیگابایت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۱۵,۳۹۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/4560651.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل اپل مدل Apple iPhone XS تک سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۱۷,۳۴۹,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/2310961.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل هوآوی مدل Y7 Prime 2018 دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۲,۳۷۸,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/5489258.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل سامسونگ مدل j4 Plus J415 دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۲,۳۹۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/2310961.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل هوآوی مدل Y7 Prime 2018 دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۲,۳۷۸,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/3694075.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل هوآوی مدل Nova 3i INE-LX1M دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۴,۱۳۹,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/1335154.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل اپل مدل iPhone X ظرفیت 256 گیگابایت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۱۵,۳۹۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/4560651.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل اپل مدل Apple iPhone XS تک سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۱۷,۳۴۹,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/5489258.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل سامسونگ مدل j4 Plus J415 دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۲,۳۹۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/2196691.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل سامسونگ مدل J7 Pro SM-J730F
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۳,۳۰۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>



{{--                            ارزان‌ترین--}}
                            <div class="tab-pane" id="down-price" role="tabpanel" aria-expanded="false">
                                <div class="container no-padding-right">
                                    <ul class="row listing-items">
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/5489258.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل سامسونگ مدل j4 Plus J415 دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۲,۳۹۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/2196691.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل سامسونگ مدل J7 Pro SM-J730F
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۳,۳۰۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/2310961.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل هوآوی مدل Y7 Prime 2018 دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۲,۳۷۸,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/3694075.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل هوآوی مدل Nova 3i INE-LX1M دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۴,۱۳۹,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/2310961.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل هوآوی مدل Y7 Prime 2018 دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۲,۳۷۸,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/3694075.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل هوآوی مدل Nova 3i INE-LX1M دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۴,۱۳۹,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/1335154.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل اپل مدل iPhone X ظرفیت 256 گیگابایت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۱۵,۳۹۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/4560651.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل اپل مدل Apple iPhone XS تک سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۱۷,۳۴۹,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/1335154.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل اپل مدل iPhone X ظرفیت 256 گیگابایت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۱۵,۳۹۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/4560651.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل اپل مدل Apple iPhone XS تک سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۱۷,۳۴۹,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/5489258.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل سامسونگ مدل j4 Plus J415 دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۲,۳۹۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/2196691.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل سامسونگ مدل J7 Pro SM-J730F
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۳,۳۰۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
{{--                            گران‌ترین--}}
                            <div class="tab-pane" id="top-price" role="tabpanel" aria-expanded="false">
                                <div class="container no-padding-right">
                                    <ul class="row listing-items">
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/5489258.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل سامسونگ مدل j4 Plus J415 دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۲,۳۹۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/2196691.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل سامسونگ مدل J7 Pro SM-J730F
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۳,۳۰۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/2310961.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل هوآوی مدل Y7 Prime 2018 دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۲,۳۷۸,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/3694075.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل هوآوی مدل Nova 3i INE-LX1M دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۴,۱۳۹,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/1335154.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل اپل مدل iPhone X ظرفیت 256 گیگابایت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۱۵,۳۹۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/4560651.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل اپل مدل Apple iPhone XS تک سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۱۷,۳۴۹,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/2310961.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل هوآوی مدل Y7 Prime 2018 دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۲,۳۷۸,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/3694075.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل هوآوی مدل Nova 3i INE-LX1M دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۴,۱۳۹,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/1335154.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل اپل مدل iPhone X ظرفیت 256 گیگابایت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۱۵,۳۹۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/4560651.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل اپل مدل Apple iPhone XS تک سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۱۷,۳۴۹,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/5489258.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل سامسونگ مدل j4 Plus J415 دو سیم کارت
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۲,۳۹۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-4 col-md-6 col-12 no-padding">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>تاپ کالا</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="assets/img/product/2196691.jpg" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                گوشی موبایل سامسونگ مدل J7 Pro SM-J730F
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    ۳,۳۰۰,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="pager default text-center">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- main -->
@endsection
