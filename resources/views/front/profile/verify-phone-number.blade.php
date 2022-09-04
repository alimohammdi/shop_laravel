@extends('front.layouts.master')
@section('title','پروفایل کاربری _ احراز هویت')
@section('content')
    <!-- main -->
    <main class="profile-user-page default">
        <div class="container">
            <div class="row">
                <div class="profile-page col-xl-9 col-lg-8 col-md-12 order-2">
                    <div class="row">
                        <div class="col-12">
                            <div class="col-12">
                                <h1 class="title-tab-content">احراز هویت دو مرحله ای</h1>
                            </div>
                            <div class="content-section default">
                                <div class="row">
                                    <div class="col-12">
                                        <h1 class="title-tab-content">تایید کد :</h1>
                                    </div>
                                </div>
                                <br>
                                <form class="form-account" method="post" action="{{ route('verify.phone.number') }}" >
                                    @csrf

                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-account-title">کد تاییدیه</div>
                                            <div class="form-account-row">
                                                <input class="input-field" name="token" type="text"  placeholder="کد تاییدیه را وارد نمایید">
                                            </div>
                                            @error('phone')
                                            <div class="alert alert-danger ">
                                            <span>
                                                {{ $message   }}
                                            </span>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class="btn btn-info btn-lg">تایید</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{--    slider profile--}}
                @include('front.profile.sidebar_profile')
            </div>
        </div>
    </main>
    <!-- main -->
@endsection
