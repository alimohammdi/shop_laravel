@extends('dashboard.layouts.master')
@section('title','افزودن ویژگی جدید')
@section('content')

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        <h4 class="card-title">افزودن ویژگی </h4>
                        @if(session('create-attribute-success'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-success  " > {{  session('create-attribute-success') }}</span>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('attribute.store') }}"  method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail111">عنوان ویژگی</label>
                                        <input type="text" name="name" class="form-control"  value="{{ old('name') }}" id="exampleInputEmail111" placeholder="عنوان ویژگی جدید را وارد نمایید ">

                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror

                                    <button type="submit" class="btn btn-primary mr-2">ذخیره</button>
                                </form>
                                <a href="{{ route('attribute.index') }}" class="btn btn-danger mt-2">بازگشت</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
