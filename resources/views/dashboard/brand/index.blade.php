@extends('dashboard.layouts.master')
@section('title','مدیریت برند ها')
@section('content')

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        @if(session('add-brand'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-success  " > {{  session('add-brand') }}</span>
                            </div>
                            <br>
                        @endif
                            @if(session('add-error'))
                                <br>
                                <div class="mb-3">
                                    <span class="alert alert-danger  " > {{  session('add-error') }}</span>
                                </div>
                                <br>
                            @endif
                        @if(session('delete-brand-success'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-success  " > {{  session('delete-brand-success') }}</span>
                            </div>
                            <br>
                        @endif
                            @if(session('delete-brand-error'))
                                <br>
                                <div class="mb-3">
                                    <span class="alert alert-danger  " > {{  session('delete-brand-error') }}</span>
                                </div>
                                <br>
                            @endif
                        <h4 class="card-title">اضافه کردن برند </h4>

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('brand.store')  }}"  method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail111"> نام برند</label>
                                        <input type="text" name="name" class="form-control"  value="{{ old('name') }}" id="exampleInputEmail111" placeholder="مثال: سامسونگ " >
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail111">تصویر</label>
                                        <input type="file" name="image" class="form-control"  value="{{ old('image') }}"  >
                                    </div>
                                    @error('image')
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
                <div class="col-xl-6 box-margin height-card">
                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead>

                        <tr>

                            <th>نام برند</th>
                            <th>تصویر</th>
                            <th>عملیات</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($brands as $brand)

                            <tr>

                                <th>{{ $brand->name }}</th>
                                <th>
                                    <img src="{{ asset('images/brands/'.$brand->image) }}" alt="تصویر برند{{ $brand->name }}" height="75px" width="75px">
                                </th>
                                {{--                                            <td>{{ $user->created_at->format('Y/m/d') }}</td>--}}
                                <td class="row-cols-2  ">
                                    {!! Form::open(['route'=>['brand.destroy','id'=>$brand->id],'method'=>'delete']) !!}
                                    {!! Form::submit('حذف',['class'=>'btn btn-danger btn-sm mb-1 ','onclick' => 'return confirm("آیا از حذف برند اطمینان دارید ؟؟")']); !!}
                                    {!! Form::close() !!}
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
