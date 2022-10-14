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
                        <h4 class="card-title">ویرایش محصول فروشگاه</h4>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('products.update' , $product->id ) }}"  method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label for="exampleInputEmail111">عنوان محصول</label>
                                        <input type="text" name="title" class="form-control"  value=" @if(old('title')) {{ old('title') }} @else {{ $product->title }}  @endif" id="exampleInputEmail111" >
                                        {{--                                     send user id --}}
                                    </div>
                                    @error('title')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail12">توضیحات محصول</label>
                                        <textarea  name="description" class="form-control"    >@if(old('description')) {{ old('description') }} @else {{ $product->description }}  @endif</textarea>
                                    </div>
                                    @error('description')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword11">تصویر محصول </label>
                                        <div class="form-group">
                                            <img src="{{ asset('images/products/'.$product->image) }}" alt="تصویر محصول" width="100" height="100" >
                                        </div>
                                        <div class="form-group">
                                            <span> انتخاب تصویر جدید برای محصول</span>
                                            <input type="file"  name="image" class="form-control"   >
                                        </div>
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
                                                <option value="{{ $cat->id }}" {{ in_array($cat->id,$product->categories()->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $cat->name }}</option>
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
                                        <label for="exampleInputPassword11"> برند محصول </label>
                                        <select name="brand"  class="form-control"  >
                                            @foreach($brands as $brand)
                                                <option value="{{ $brand->id }}" @if($product->brand_id == $brand->id) {{ 'selected' }}   @endif>{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('brand')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword11">موجودی محصول </label>
                                        <input type="text"  name="amount" class="form-control" value="@if(old('amount')) {{ old('amount') }} @else {{ $product->amount }}  @endif"  >
                                    </div>
                                    @error('amount')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword11">قیمت  محصول </label>
                                        <input type="text"  name="price" class="form-control"  value="@if(old('price')) {{ old('price') }} @else {{ $product->price }}  @endif" >
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
