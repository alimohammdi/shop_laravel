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
                                    @if(session('create-user-success'))
                                        <br>
                                            <div class="mt-2 mb-3 p-2 fw-bold ">
                                                <span class="alert alert-success  " > {{  session('create-user-success') }}</span>
                                            </div>
                                    @endif
                                    @if(session('delete-user-success'))
                                        <br>
                                        <div class="mt-2 mb-3 ">
                                            <span class="alert alert-danger text-dark " > {{  session('delete-user-success') }}</span>
                                        </div>
                                    @endif
                                    <a href="{{ route('users.create') }}" class="btn btn-primary mt-2 mb-2 col align-self-start"> افزودن کاربر جدید</a>
                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                        <thead>
                                        <tr>
                                            <th>نام</th>
                                            <th>ایمیل</th>
                                            <th>شماره موبایل</th>
                                            <th>نقش کاربری</th>
                                            <th>تاریخ عضویت</th>
                                            <th>عملیات</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    @if($user->phone_number)
                                                        {{ $user->phone_number }}
                                                    @else
                                                        {{ '------' }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($user->is_admin)
                                                        <span class="badge badge-success">ادمین</span>
                                                    @elseif($user->is_operator)
                                                        <span class="badge badge-info">اپراتور</span>
                                                    @else
                                                        <span>کاربر عادی</span>
                                                    @endif
                                                </td>
                                                <td>{{ $user->created_at->format('Y/m/d') }}</td>
                                                <td class="row-cols-2  ">
                                                    {!! Form::open(['route'=>['users.destroy','id'=>$user->id],'method'=>'delete']) !!}
                                                    {!! Form::submit('حذف',['class'=>'btn btn-danger btn-sm mb-1 ','onclick' => 'return confirm("آیا از حذف کاربر اطمینان دارید ؟؟")']); !!}
                                                    {!! Form::close() !!}

                                                    {!! Form::open(['route'=>['users.show','id'=>$user->id],'method'=>'get']) !!}
                                                    {!! Form::submit('نمایش',['class'=>'btn btn-secondary btn-sm ']); !!}
                                                    {!! Form::close() !!}

                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $users->links() }}
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->
                </div>
            </div>
        </div>
@endsection
