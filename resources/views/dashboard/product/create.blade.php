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
                        <h4 class="card-title">افزودن محصول به فروشگاه</h4>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('products.store') }}"  method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail111">عنوان محصول</label>
                                        <input type="text" name="title" class="form-control"  value="{{ old('title') }}" id="exampleInputEmail111" placeholder="عنوان محصول را وارد نمایید ">
{{--                                     send user id --}}
                                        <input type="hidden"  class="form-control" name="user_id"  value="{{ auth()->user()->id }}">
                                    </div>
                                    @error('title')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail12">توضیحات محصول</label>
                                        <textarea  name="description" class="form-control"   placeholder="توضیحات محصول را وارد نمایید">{{ old('description') }}</textarea>
                                    </div>
                                    @error('description')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword11">تصویر محصول </label>
                                        <input type="file"  name="image" class="form-control"   >
                                    </div>
                                    @error('image')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword11">موجودی محصول </label>
                                        <input type="number"  name="amount" class="form-control" value="{{ old('amount') }}"  >
                                    </div>
                                    @error('amount')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword11">قیمت  محصول </label>
                                        <input type="number"  name="price" class="form-control"  value="{{ old('price') }}" >
                                    </div>
                                    @error('price')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror

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
