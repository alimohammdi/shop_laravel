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
                        <h4 class="card-title">ویرایش seo محصول  </h4>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('seo.update',$seo->id) }}" method="post">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="exampleInputEmail111">عنوان </label>
                                            <input type="text" name="title" class="form-control"  value="{{ $seo->title }}" id="exampleInputEmail111" >
                                        </div>
                                        @error('title')
                                        <div class="alert alert-danger">
                                            <span > {{ $message  }}</span>
                                        </div>
                                        @enderror
                                        <div class="form-group">
                                            <label for="exampleInputEmail12">توضیحات </label>
                                            <textarea  name="description" class="form-control"   placeholder="توضیحات seo محصول را وارد نمایید">{{ $seo->description }}</textarea>
                                        </div>
                                        @error('description')
                                        <div class="alert alert-danger">
                                            <span > {{ $message  }}</span>
                                        </div>
                                        @enderror
                                        <div class="form-group">
                                            <label for="exampleInputEmail111">کلمات کلیدی </label>
                                            <input type="text" name="keywords" class="form-control"  value="{{ $seo->keywords}}" id="exampleInputEmail111"   >
                                        </div>
                                        @error('keywords')
                                        <div class="alert alert-danger">
                                            <span > {{ $message  }}</span>
                                        </div>
                                        @enderror
                                        <div class="form-group">
                                        <input type="submit" value="ویرایش"  class=" btn btn-primary ">
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
