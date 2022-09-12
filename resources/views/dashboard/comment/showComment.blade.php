@extends('dashboard.layouts.master')
@section('title','نمایش کامنت')
@section('content')

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Table area Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 box-margin">
                    <div class="table-">
                        <div class="card-body">

                            <div class="edit-table-area">
                                <div class="table-responsive">
                                    <h6>مشخصات کاربر</h6>
                                    <table id="basicTableId" class="table table-bordered table-striped mb-0">
                                        <tbody>
                                        <tr>
                                            <th>نام کامل </th>
                                            <th>ایمیل</th>
                                            <th>شماره تماس</th>
                                            <th>تاریخ عضویت</th>
                                        </tr>
                                        <tr>
                                            <td class="editMe">{{ $comment->user->name }}</td>
                                            <td class="editMe">{{ $comment->user->email }}</td>
                                            <td class="editMe">
                                                @if($comment->phone_number)
                                                    {{ $comment->phone_number }}
                                                @else
                                                    {{ "شماره وارد نشده" }}
                                                @endif
                                            </td>
                                            <td>
                                                {{ $comment->created_at->format('Y/m/d') }}
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                    <br>
                                    <br>
                                    <h6>مشخصات کامنت</h6>
                                    <table id="basicTableId" class="table table-bordered table-striped mb-0">
                                        <tbody>
                                        <tr>
                                            <th>کامنت</th>
                                            <th> وضعیت کامنت</th>

                                        </tr>
                                        <tr>
                                            <td class="editMe ">
                                               {{ $comment->text }}
                                            </td>
                                            <td class="editMe">
                                                @if($comment->approved == 1)
                                                    <span class="text-success">تایید شده</span>
                                                @else
                                                    <span class="text-danger">تایید نشده</span>
                                                @endif
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
