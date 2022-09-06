@extends('dashboard.layouts.master')
@section('title','داشبورد')
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
                                <h4 class="card-title">نمایش کاربر</h4>
                                <div class="table-responsive">

                                    <table id="basicTableId" class="table table-bordered table-striped mb-0">
                                        <tbody>
                                        <tr>
                                            <th>نام کامل </th>
                                            <th>ایمیل</th>
                                            <th>شماره تماس</th>
                                            <th>تاریخ عضویت</th>
                                        </tr>
                                        <tr>
                                            <td class="editMe">{{ $user->name }}</td>
                                            <td class="editMe">{{ $user->email }}</td>
                                            <td class="editMe">
                                                @if($user->phone_number)
                                                    {{ $user->phone_number }}
                                                @else
                                                    {{ "شماره وارد نشده" }}
                                                @endif
                                            </td>
                                            <td>
                                                {{ $user->created_at->format('Y/m/d') }}
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                    <br>
                                    <br>
                                    <table id="basicTableId" class="table table-bordered table-striped mb-0">
                                        <tbody>
                                        <tr>
                                            <th>نقش کاربری</th>
                                            <th>تایید ایمیل</th>
                                            <th>تایید دو مرحله ای شماره موبایل</th>
                                        </tr>
                                        <tr>
                                            <td class="editMe ">
                                                @if($user->is_admin)
                                                    <span class="text-success ">ادمین</span>
                                                @elseif($user->is_operator)
                                                    <span class="text-info ">اپراتور</span>
                                                @else
                                                    <span>کاربر عادی</span>
                                                @endif
                                            </td>
                                            <td class="editMe">
                                                @if($user->email_verified_at)
                                                    <span class="text-success">تایید شده</span>
                                                @else
                                                    <span class="text-danger">تایید نشده</span>
                                                @endif
                                            </td>
                                            <td class="editMe">
                                                @if($user->tow_factor_type === 'active')
                                                    <span class="text-success">فعال</span>
                                                @elseif($user->tow_factor_type === 'not_active')
                                                    <span class="text-info">غیر فعال</span>
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
