@extends('dashboard.layouts.master')
@section('title','داشبورد-نمایش سفارش ')
@section('content')

    <!-- Main Content Area -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                @if(session('send.order'))
                                    <br>
                                    <div class="mt-2 mb-3 ">
                                        <span class="alert alert-primary text-white " > {{  session('send.order') }}</span>
                                    </div>
                                @endif
                                <div class="col-sm-6 pb-4">

                                    <div class="media align-items-center">
                                        <!-- Logo -->
                                        <div class="card-body-login mb-30">
                                            <img src="img/core-img/small-logo.png" alt="">
                                        </div>
                                    </div>

                                    @if(isset($user->address))
                                        <div class="mb-1 font-15">  :ادرس</div>
                                        <div class="mb-1 font-15">{{ $user->address }}</div>
                                    @endif


                                </div>

                                <div class="col-sm-6 text-right pb-4">

                                    <h6 class="font-15 mb-3">صورتحساب # {{ $order->id }}</h6>
                                    <div class="mb-1 font-15">تاریخ: <strong class="font-weight-semibold">{{ $order->created_at }}</strong></div>


                                </div>
                            </div>

                            <hr class="mb-4">

                            <div class="row">
                                <div class="col-sm-6 mb-4">
                                    <div class="mb-2"><strong>مشخصات کاربر:</strong></div>
                                    <div class="font-14 mb-1">نام کاربری : {{ $user->name }}</div>
                                    <div class="font-14 mb-1">ایمیل ادرس : {{ $user->email }}</div>

                                    <div class="font-14 mb-1"> شماره تماس : {{ $user->phone }}</div>
                                    @if(isset($user->address))
                                        <div class="font-14 mb-1">{{ $user->address }}</div>
                                    @endif
                                </div>

                                <div class="col-sm-6 mb-4">
                                    <div class="mb-2"><strong>جزئیات پرداخت:</strong></div>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td class="pr-3 font-14">مبلغ کل:</td>
                                            <td class="font-14"><strong>{{ $order->price }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="pr-3 font-14">وضعیت پرداخت :</td>
                                            <td class="font-14"><strong>  @if($order->status == "paid") {{ 'پرداخت شده'}}  @elseif($order->status == "unpaid") {{ 'پرداخت نشده'}}@else {{ 'کنسل شده' }} @endif</strong></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="table-responsive mb-4">
                                <table class="table m-0">
                                    <thead>
                                    <tr>

                                        <th class="py-3">
                                            شرح محصول
                                        </th>
                                        <th>
                                            تصویر محصول
                                        </th>
                                        <th class="py-3">
                                            تعداد سفارش
                                        </th>
                                        <th class="py-3">
                                            قیمت تکی
                                        </th>
                                        <th class="py-3">
                                            مبلغ کل
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="py-3">
                                            <div class="font-weight-semibold">{{ $product->title }}</div>
                                        </td >
                                        <td class="py-3">
                                            <img src="{{ asset('images/products/'.$product->image) }}" width="75px" height="75px" alt="">
                                        </td>
                                        <td class="py-3">
                                            <strong>{{ $cart->quantity }}</strong>
                                        </td>
                                        <td class="py-3">
                                            <strong> تومان{{ number_format($product->price) }}</strong>
                                        </td>
                                        <td class="py-3">
                                            <strong>{{ number_format($product->price * $cart->quantity) }} تومان</strong>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div>

                            </div>
                            <div class="text-right">
                                <form action="{{ route('invoice.status',$order->basket_id) }}" method="post">
                                    @csrf
                                    @method('PATCH')
                                    <input type="submit" value="ارسال سفارش" class="btn btn-primary ml-2 mb-2" >
                                </form>
                                <a href="{{ route('order.index') }}" class="btn btn-danger">بازگشت -></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
