@extends('dashboard.layouts.master')
@section('title','داشبورد-مدیریت سفارشات')
@section('content')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">نمایش سفارشات</h4>

                                @if(session('delete-order-success'))
                                    <br>
                                    <div class="mt-2 mb-3 ">
                                        <span class="alert alert-danger text-dark " > {{  session('delete-order-success') }}</span>
                                    </div>
                                @endif
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>

                                    <tr>
                                        <th>شماره سفارش</th>
                                        <th>نام کاربر</th>
                                        <th> قیمت سفارش (تومان)</th>
                                        <th>وضعیت پرداخت</th>
                                        <th>وضعیت ارسال</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach ($orders as $order)

                                        <tr>
                                            <td>{{ $order->id }}</td>
                                            <td>{{  $order->user->name}}</td>
                                            <td>{{ number_format($order->price) }}</td>

                                            <td>
                                            @if($order->status == 'paid')
                                                <span class="badge badge-success"> پرداخت شده</span>
                                                @elseif($order->status == 'unpaid')
                                                    <span class="badge badge-danger"> پرداخت نشده</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($order->delivery == '1')
                                                    <span class="badge badge-success"> ارسال شده</span>
                                                @elseif($order->delivery == '0')
                                                    <span class="badge badge-danger">  ارسال نشده</span>
                                                @endif
                                            </td>

{{--                                            <td>{{ $user->created_at->format('Y/m/d') }}</td>--}}
                                            <td class="row-cols-2  ">
                                                {!! Form::open(['route'=>['order.destroy','id'=>$order->id],'method'=>'delete']) !!}
                                                {!! Form::submit('حذف',['class'=>'btn btn-danger btn-sm mb-1 ','onclick' => 'return confirm("آیا از حذف سفارش اطمینان دارید ؟؟")']); !!}
                                                {!! Form::close() !!}
                                                <a href="{{ route('invoice.index',$order->basket_id) }}" class="btn btn-primary">نمایش سفارش</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $orders->links() }}
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
            </div>
        </div>
    </div>
@endsection
