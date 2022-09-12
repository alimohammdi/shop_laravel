@extends('dashboard.layouts.master')
@section('title','مدیریت کامنت ها')
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

                                @if(session('delete-comment-success'))
                                    <br>
                                    <div class="mt-2 mb-3 ">
                                        <span class="alert alert-danger text-dark " > {{  session('delete-comment-success') }}</span>
                                    </div>
                                @endif
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>مربوط به</th>
                                        <th>نام کاربر</th>
                                        <th>متن نظر</th>
                                        <th>وضعیت</th>
                                        <th>تاریخ</th>
                                        <th class="col-3">عملیات</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach ($comment as $com)
                                            <td>
                                                @if($com->commentable_type ===  "App\Models\Product")
                                                    {{ 'محصولات' }}
                                                   @endif
                                            </td>
                                            <td>{{ $com->user->name }}</td>
                                            <td>{{ Illuminate\support\str::limit($com->text ,70) }}</td>
                                            <td>
                                                @if($com->approved == 0)
                                                    <span class="badge badge-danger" >تایید نشده</span>
                                                @else
                                                    <span class="badge badge-success" >تایید شده</span>
                                                @endif
                                            </td>

                                            <td>{{ $com->created_at->format('Y/m/d') }}</td>
                                            <td class="col-3 ">
                                                @if($com->approved == 0)
                                                    {!! Form::open(['route'=>['comment.edit','id'=>$com->id],'method'=>'get']) !!}
                                                    {!! Form::submit('تایید',['class'=>'btn btn-success btn-sm mb-1','onclick' => 'return confirm("آیا از تایید  کامنت اطمینان دارید ؟؟")']); !!}
                                                    {!! Form::close() !!}
                                                @endif

                                                {!! Form::open(['route'=>['comment.destroy','id'=>$com->id],'method'=>'delete']) !!}
                                                {!! Form::submit('حذف',['class'=>'btn btn-danger btn-sm mb-1 d-inline','onclick' => 'return confirm("آیا از حذف کامنت اطمینان دارید ؟؟")']); !!}
                                                {!! Form::close() !!}

                                                {!! Form::open(['route'=>['comment.show','id'=>$com->id],'method'=>'get']) !!}
                                                {!! Form::submit('نمایش',['class'=>'btn btn-secondary btn-sm d-inline']); !!}
                                                {!! Form::close() !!}

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $comment->links() }}
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
            </div>
        </div>
    </div>
@endsection
