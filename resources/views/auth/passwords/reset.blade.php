@extends('layouts.app')
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
                        <h4 class="font-18 mb-30">فراموشی رمز عبور؟</h4>
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group">
                                <label class="lock-text text-dark">ایمیل یا شماره تماس</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-4 col-form-label text-md-end">رمز عبور</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">تکرار رمز عبور</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group ">
                                <button class="btn btn-primary btn-block" type="submit">تغییر پسوورد</button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
        </div>
    </div>
@endsection

