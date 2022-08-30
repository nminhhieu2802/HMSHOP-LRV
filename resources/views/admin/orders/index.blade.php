@extends('layouts.admin')

@section('title')
    Orders
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-light ">New Orders
                        <a href="{{ 'order-history' }}" class="btn bg-light fw-bold float-end">Order History</a>
                    </h1>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Order Date</th>
                                <th>Tracking Number</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)
                                <tr>
                                    <td>{{ date('d-m-Y',strtotime($item->created_at)) }}</td>
                                    <td>{{ $item->tracking_no }}</td>
                                    <td>{{ number_format($item->total_price) }} VNĐ</td>
                                    <td>{{ $item->status =='0' ?'pending' : 'completed' }}</td>
                                    <td>
                                        <a href="{{ url('admin/view-order/'.$item->id) }}" class="btn btn-dark text-light fw-bold">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                    <nav >
                        <ul class="pagination pagination-circle float-end md-3">
                            <li class="page-item">
                                <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            {{ $orders->links() }}
                            <li class="page-item">
                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
            </div>
        </div>
    </div>
</div>

@endsection