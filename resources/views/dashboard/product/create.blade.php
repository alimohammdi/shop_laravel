@extends('dashboard.layouts.master')
@section('title','افزودن محصول به فروشگاه')
@section('content')

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="card-body">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">مشخصات پایه</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">ویژگی ها </a>
                            <a class="nav-item nav-link" id="nav-seo-tab" data-toggle="tab" href="#nav-seo" role="tab" aria-controls="nav-seo" aria-selected="false"> SEO </a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
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
                                                    <label for="exampleInputPassword11">دسته بندی محصول </label>
                                                    <select name="categories[]" id="categories" class="form-control" multiple>
                                                        @forelse($categories as $cat)
                                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                        @empty
                                                            {{ 'دسته بندی موجود نیست' }}
                                                        @endforelse
                                                    </select>
                                                </div>
                                                @error('categories')
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

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="col-xl-6 box-margin height-card">
                                    <div class="card card-body">

                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    @foreach($attribute as $att)
                                                        <label for="{{ $att->id }}">{{ $att->name }}</label>
                                                        <select class="form-control" name="attributeValue[]" id="{{ $att->id }}">
                                                            @foreach($values as $val)
                                                                @if($val->attribute_id === $att->id )
                                                                    <option value="{{ $att->id }} - {{ $val->id}}">{{ $val->value }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                        <br><br>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-seo" role="tabpanel" aria-labelledby="nav-seo-tab">
                            <div class="col-xl-6 box-margin height-card">
                                <div class="card card-body">

                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail111">عنوان </label>
                                                    <input type="text" name="title_seo" class="form-control"  value="{{ old('title_seo') }}" id="exampleInputEmail111" placeholder="عنوان seo محصول را وارد نمایید ">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail12">توضیحات </label>
                                                    <textarea  name="description_seo" class="form-control"   placeholder="توضیحات seo محصول را وارد نمایید">{{ old('description_seo') }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail111">کلمات کلیدی </label>
                                                    <input type="text" name="keywords" class="form-control"  value="{{ old('keywords') }}" id="exampleInputEmail111" placeholder="مثال : گوشی سامسونگ - گوشی A21">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    </form>
                </div>




            </div>
        </div>
    </div>
@endsection
