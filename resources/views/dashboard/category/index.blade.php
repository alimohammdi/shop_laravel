@extends('dashboard.layouts.master')
@section('title','مدیریت دسته بندی ها')
@section('content')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">نمایش دسته بندی</h4>

                                @if(session('delete-category-success'))
                                    <br>
                                    <div class="mt-2 mb-3 ">
                                        <span class="alert alert-danger text-dark " > {{  session('delete-category-success') }}</span>
                                    </div>
                                @endif

                                <a href="{{ route('category.create') }}" class="btn btn-primary mt-2 mb-2 col align-self-start"> افزودن دسته بندی جدید</a>
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>

                                    <tr>
                                        <th>آیدی</th>
                                        <th>دسته بندی</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach ($categories as $cat)

                                        <tr>
                                            <td>{{ $cat->id }}</td>
                                            <th>{{ $cat->name }}</th>
                                            {{--                                            <td>{{ $user->created_at->format('Y/m/d') }}</td>--}}
                                            <td class="row-cols-2  ">
                                                {!! Form::open(['route'=>['category.destroy','id'=>$cat->id],'method'=>'delete']) !!}
                                                {!! Form::submit('حذف',['class'=>'btn btn-danger btn-sm mb-1 ','onclick' => 'return confirm("آیا از حذف دسته بندی اطمینان دارید ؟؟")']); !!}
                                                {!! Form::close() !!}

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $categories->links() }}
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
            </div>
        </div>
    </div>
@endsection
