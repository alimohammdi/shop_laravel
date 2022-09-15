@extends('dashboard.layouts.master')
@section('title','مدیریت ویژگی ها')
@section('content')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">نمایش ویژگی های محصولات</h4>

                                @if(session('update-attribute-success'))
                                    <br>
                                    <div class="mb-3">
                                        <span class="alert alert-success  " > {{  session('update-attribute-success') }}</span>
                                    </div>
                                @endif
                                @if(session('delete-attribute-success'))
                                    <br>
                                    <div class="mt-2 mb-3 ">
                                        <span class="alert alert-danger text-dark " > {{  session('delete-attribute-success') }}</span>
                                    </div>
                                @endif

                                <a href="{{ route('attribute.create') }}" class="btn btn-primary mt-2 mb-2 col align-self-start"> افزودن ویژگی جدید</a>
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>

                                    <tr>
                                        <th>آیدی</th>
                                        <th>عنوان ویژگی</th>
                                        <th>عملیات</th>
                                        <th></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach ($attribute as $att)

                                        <tr>
                                            <td>{{ $att->id }}</td>
                                            <th>{{ $att->name }}</th>
                                            {{--                                            <td>{{ $user->created_at->format('Y/m/d') }}</td>--}}
                                            <td class="row-cols-2  ">
                                                {!! Form::open(['route'=>['attribute.destroy','id'=>$att->id],'method'=>'delete']) !!}
                                                {!! Form::submit('حذف',['class'=>'btn btn-danger btn-sm mb-1 ','onclick' => 'return confirm("آیا از حذف ویژگی اطمینان دارید ؟؟")']); !!}
                                                {!! Form::close() !!}
                                                {!! Form::open(['route'=>['attribute.edit','id'=>$att->id],'method'=>'get']) !!}
                                                {!! Form::submit('ویرایش',['class'=>'btn btn-primary btn-sm mb-1 ']); !!}

                                            </td>
                                            <td>
                                                {!! Form::close() !!}
                                                {!! Form::open(['route'=>['attribute.get.value','id'=>$att->id],'method'=>'get']) !!}
                                                {!! Form::submit('افزودن مقدار به ویژگی',['class'=>'btn btn-secondary btn-sm mt-3 ' ]); !!}
                                                {!! Form::close() !!}
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $attribute->links() }}
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
            </div>
        </div>
    </div>
@endsection
