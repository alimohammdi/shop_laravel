@extends('dashboard.layouts.master')
@section('title','داشبورد')
@section('content')
    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        <h4 class="card-title">افزودن کاربر</h4>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('users.store') }}"  method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail111">نام کاربری</label>
                                        <input type="text" name="name" class="form-control"  value="{{ old('name') }}" id="exampleInputEmail111" placeholder="نام">
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail12">آدرس ایمیل</label>
                                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="exampleInputEmail12" placeholder="ایمیل">
                                    </div>
                                    @error('email')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword11">کلمه عبور</label>
                                        <input type="password"  name="password" class="form-control" id="exampleInputPassword11" placeholder="رمز عبور">
                                    </div>
                                    @error('password')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword12">تکرار کلمه عبور</label>
                                        <input type="password"  class="form-control" name="password_confirmation"  id="exampleInputPassword12" placeholder="تکرار رمز عبور">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">ذخیره</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
