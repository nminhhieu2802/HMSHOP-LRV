@extends('layouts.admin')

@section('title')
    My Orders
@endsection

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-white">Order View
                        <a href="{{ url('orders') }}" class="btn bg-light fw-bold float-end">Back</a>
                    </h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 order-details">
                            <h5>Shipping Details</h5>
                            <hr>
                            <label for="">First Name</label>
                            <div class="border p-2">{{ $orders->fname }}</div>
                            <label for="">Last Name</label>
                            <div class="border p-2">{{ $orders->lname }}</div>
                            <label for="">Email</label>
                            <div class="border p-2">{{ $orders->email }}</div>
                            <label for="">Contact No.</label>
                            <div class="border p-2">{{ $orders->phone }}</div>
                            <label for="">Shipping Address</label>
                            <div class="border p-2">
                                {{ $orders->address1 }}, 
                                {{ $orders->address2 }}, 
                                {{ $orders->city }}, 
                                {{ $orders->state }}, 
                                {{ $orders->country }}.                                
                            </div>
                            <label for="">Zip Code</label>
                            <div class="border p-2">{{ $orders->pincode }}</div>
                        </div>
                        <div class="col-md-6">
                            <h5>Order Details</h5>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders->orderitems as $item)
                                        <tr>
                                            <td>{{ $item->products->name }}</td>
                                            <td>{{ $item->qty }}</td>
                                            <td>{{ number_format($item->price) }} VNĐ</td>
                                            <td>
                                                <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" width="50px" alt="Product Image">
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <h5 class="px-2">Grand Total : <span class="float-end">{{ number_format($orders->total_price) }} VNĐ </span></h5>
                            <h5 class="px-2">Pay : <span class="float-end">{{ $orders->payment_mode }}</span></h5>
                            <div class="mt-5 px-2">
                                <label for="">Order Status</label>
                                <form action="{{ url('update-order/'.$orders->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <select class="form-select" name="order_status">
                                        <option {{ $orders->status =='0'?'selected':'' }} value="0">Pending</option>
                                        <option {{ $orders->status =='1'?'selected':'' }} value="1">Completed</option>
                                    </select>
                                <button type="submit" class="btn bg-dark text-white float-right mt-3">Update</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection