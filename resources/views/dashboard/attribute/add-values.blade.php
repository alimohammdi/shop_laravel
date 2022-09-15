@extends('dashboard.layouts.master')
@section('title','اضافه کردن مقدار به ویژگی  ')
@section('content')

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        @if(session('add-attribute-value-success'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-success  " > {{  session('add-attribute-value-success') }}</span>
                            </div>
                            <br>
                        @endif
                            @if(session('delete-attribute-value-success'))
                                <br>
                                <div class="mb-3">
                                    <span class="alert alert-danger  " > {{  session('delete-attribute-value-success') }}</span>
                                </div>
                                <br>
                            @endif
                        <h4 class="card-title">اضافه کردن مقدار به ویژگی </h4>

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('attribute.add.value',$attribute->id)  }}"  method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail111">  {{ $attribute->name }}</label>
                                        <input type="text" name="value" class="form-control"  value="{{ old('value') }}" id="exampleInputEmail111" placeholder="مقدار مورد نظر برای ویژگی را وارد نمایید " >
                                        <input type="hidden" name="attribute_id" class="form-control" value="{{ $attribute->id }}">
                                    </div>
                                    @error('value')
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
                <div class="col-xl-6 box-margin height-card">
                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead>

                        <tr>

                            <th>مقدار ویژگی</th>
                            <th>عملیات</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($values as $val)

                            <tr>

                                <th>{{ $val->value }}</th>
                                {{--                                            <td>{{ $user->created_at->format('Y/m/d') }}</td>--}}
                                <td class="row-cols-2  ">
                                    {!! Form::open(['route'=>['attribute.delete.value','id'=>$val->id],'method'=>'delete']) !!}
                                    {!! Form::submit('حذف',['class'=>'btn btn-danger btn-sm mb-1 ','onclick' => 'return confirm("آیا از حذف مقدار  ویژگی اطمینان دارید ؟؟")']); !!}
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
