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
                                        <h1 class="title-tab-content">ویرایش احراز هویت</h1>
                                    </div>
                                </div>
                                @if(session('error-verify'))
                                    <div class="alert alert-danger m-2"> {{session('error-verify') }} </div>
                                @endif
                                @if(session('active-verify-phone-number'))
                                    <div class="alert alert-success m-2"> {{session('active-verify-phone-number') }} </div>
                                @endif
                                @if(session('not_active-verify'))
                                    <div class="alert alert-danger m-2"> {{session('not_active-verify') }} </div>
                                @endif
                                <form class="form-account" method="post" action="{{ route('request.towfactore') }}">
                                    @csrf
                                    <div class="row">

                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-account-title">وضعیت</div>
                                            <div class="form-account-row">
                                                <select class="input-field" name="status" id="status">
                                                    @foreach(config('status.status') as $key => $value)
                                                        <option  value="{{ $key }}" {{ old('status')== $key || auth()->user()->tow_factor_type== $key  ? 'selected' : '' }}>{{ $value }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-account-title">شماره موبایل</div>
                                            <div class="form-account-row">
                                                <input class="input-field" name="phone" type="text" value="{{ old('phone') ??  auth()->user()->phone_number }}" placeholder="شماره موبایل خود را وارد نمایید">
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
                                        <button class="btn btn-info btn-lg">ذخیره</button>
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
