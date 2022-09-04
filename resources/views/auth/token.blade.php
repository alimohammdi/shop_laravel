@extends('layouts.app')
@section('title','صفحه ورود به پنل')
@section('content')
    <div class="middle-box">
        <div class="card">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="xs-d-none mb-50-xs break-320-576-none">
                            <img src="{{ asset('admin/img/bg-img/1.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Logo -->
                        <h4 class="font-18 mb-30" class="float-left">تایید شماره موبایل</h4>
                        <form class="form-account" method="post"  action="{{ route('send-token-code') }}">
                            @csrf
                            <div class="form-group">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-account-title">کد تاییدیه</div>
                                    <div class="form-account-row form-group">
                                        <input class="form-control " name="token" type="text"  placeholder="کد تاییدیه را وارد نمایید">
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
                                <button class="btn btn-primary btn-block">تایید</button>
                            </div>
                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
        </div>
    </div>
@endsection
