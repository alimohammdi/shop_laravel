@extends('dashboard.layouts.master')
@section('title',' داشبورد - seo')
@section('content')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">نمایش seo</h4>
                                @if(session('delete-seo-success'))
                                    <br>
                                    <div class="mt-2 mb-3 p-2 fw-bold ">
                                        <span class="alert alert-danger  " > {{  session('delete-seo-success') }}</span>
                                    </div>
                                @endif
                                @if(session('update-seo-success'))
                                    <br>
                                    <div class="mt-2 mb-3 p-2 fw-bold ">
                                        <span class="alert alert-success  " > {{  session('update-seo-success') }}</span>
                                    </div>
                                @endif
                                <table class="table table-striped dt-responsive nowrap w-100   table-hover">
                                    <tr>
                                        <td>عنوان</td>
                                        <td>توضیحات</td>
                                        <td>کلمات کلیدی</td>
                                        <td>نام ادمین</td>
                                        <td>عملیات</td>
                                    </tr>
                                    @foreach($seoes as $details)
                                        <tr>
                                            <td>{{ $details->title }}</td>
                                            <td>{{ Illuminate\Support\Str::limit($details->description,85) }}</td>
                                            <td>{{ Illuminate\Support\Str::limit($details->keywords,50) }}</td>
                                            <td>{{ $details->user->name }}</td>
                                            <td>
                                                {!! Form::open(['route'=>['seo.destroy','id'=>$details->id],'method'=>'delete']) !!}
                                                {!! Form::submit('حذف',['class'=>'btn btn-danger mb-2']) !!}
                                                {!! Form::close()!!}
                                                {!! Form::open(['route'=>['seo.edit','id'=>$details->id],'method'=>'get']) !!}
                                                {!! Form::submit('ویرایش',['class'=>'btn btn-warning btn-sm ']); !!}
                                                {!! Form::close() !!}
                                            </td>

                                        </tr>
                                    @endforeach()
                                </table>>
                                {{ $seoes->links() }}
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
            </div>
        </div>
    </div>
@endsection

