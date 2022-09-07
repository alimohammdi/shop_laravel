@extends('dashboard.layouts.master')
@section('title','داشبورد')
@section('content')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">نمایش کاربران</h4>
                                @if(session('create-product-success'))
                                    <br>
                                    <div class="mt-2 mb-3 p-2 fw-bold ">
                                        <span class="alert alert-success  " > {{  session('create-product-success') }}</span>
                                    </div>
                                @endif
                                @if(session('delete-product-success'))
                                    <br>
                                    <div class="mt-2 mb-3 ">
                                        <span class="alert alert-danger text-dark " > {{  session('delete-product-success') }}</span>
                                    </div>
                                @endif
                                @if(session('delete-product-error'))
                                    <br>
                                    <div class="mt-2 mb-3 ">
                                        <span class="alert alert-danger text-dark " > {{  session('delete-product-error') }}</span>
                                    </div>
                                @endif
                                @if(session('update-product-success'))
                                    <br>
                                    <div class="mt-2 mb-3 ">
                                        <span class="alert alert-success text-dark " > {{  session('update-product-success') }}</span>
                                    </div>
                                @endif
                                <a href="{{ route('products.create') }}" class="btn btn-primary mt-2 mb-2 col align-self-start"> افزودن محصول جدید</a>
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>

                                    <tr>
                                        <th>عنوان</th>
                                        <th>توضیحات</th>
                                        <th>قیمت</th>
                                        <th>تصویر</th>
                                        <th>موجودی</th>
                                        <th>بازدید</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach ($product as $pro)

                                        <tr>
                                            <td>{{ $pro->title }}</td>
                                            <td>{{  Illuminate\Support\Str::limit($pro->description ,50) }}</td>
                                            <td>{{ $pro->price }}</td>
                                            <td>
                                                <img src="{{ asset('/images/products/'.$pro->image) }}" alt="تصویر محصول" width="75" height="50">
                                            </td>
                                            <td>{{ $pro->amount }} </td>
                                            <td>{{ $pro->view }}</td>
{{--                                            <td>{{ $user->created_at->format('Y/m/d') }}</td>--}}
                                            <td class="row-cols-2  ">
                                                {!! Form::open(['route'=>['products.destroy','id'=>$pro->id],'method'=>'delete']) !!}
                                                {!! Form::submit('حذف',['class'=>'btn btn-danger btn-sm mb-1 ','onclick' => 'return confirm("آیا از حذف محصول اطمینان دارید ؟؟")']); !!}
                                                {!! Form::close() !!}

                                                {!! Form::open(['route'=>['products.edit','id'=>$pro->id],'method'=>'get']) !!}
                                                {!! Form::submit('ویرایش',['class'=>'btn btn-warning btn-sm ']); !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $product->links() }}
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
            </div>
        </div>
    </div>
@endsection
