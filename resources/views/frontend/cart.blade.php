@extends('layouts.front')

@section('title')
My Cart
@endsection

@section('content')

<div class="py-3 mb-4 shadow-sm bg-dark text-light border-top">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url('/') }}"  class="text-light">
                Home
            </a> /
            <a href="{{ url('cart') }}"  class="text-light">
                Cart
            </a>
        </h6>
    </div>
</div>

<div class="container">
    <div class="card shadow cartitems">
        <div class="card-header bg-dark">
            <h4 class="text-light">Cart</h4>
        </div>
        @if ($cartitems->count() >0)
        <div class="card-body">
            @php
                $total = 0;
            @endphp
            <div class="row product_data">
                <div class="col-md-2">
                    <h6 class="fw-bold">Image</h6>
                </div>
                <div class="col-md-2">
                    <h6 class="fw-bold">Product Name</h6>
                </div>
                <div class="col-md-2">
                    <h6 class="fw-bold">Price</h6>
                </div>
                <div class="col-md-2">
                    <h6 class="fw-bold">Quantity</h6>
                </div>
                <div class="col-md-2">
                    <h6 class="fw-bold">Total Product Price</h6>
                </div>
                <div class="col-md-2">
                    <h6 class="fw-bold">Action</h6>
                </div>
            </div>
                                    <hr>
            @foreach ($cartitems as $item)
                <div class="row product_data">
                <div class="col-md-2">
                    <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" height="100px" width="100px" alt="Image Here">
                </div>
                <div class="col-md-2 my-auto">
                    <h6 class="fw-light">{{ $item->products->name }}</h6>
                </div>
                <div class="col-md-2 my-auto">
                    <h6 class="fw-light">{{ number_format($item->products->selling_price) }} VNĐ</h6>
                </div>
                <div class="col-md-2 my-auto">
                    <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                    @if( $item->products->qty >= $item->prod_qty)
                        <div class="input-group text-center mb-3" style="width:130px">
                            <button class="input-group-text changeQuantity rounded-pill btn btn-dark decrement-btn">-</button>
                            <input type="text" name="quantity" class="form-control rounded-pill qty-input text-center" value="{{ $item->prod_qty }}">
                            <button class="input-group-text changeQuantity rounded-pill btn btn-dark increment-btn">+</button>
                        </div>
                        @php
                            $total += $item->products->selling_price * $item->prod_qty;
                        @endphp
                    @else
                        <h6>Out of Stock</h6>
                    @endif
                </div>
                <div class="col-md-2 my-auto">
                    <h6 class="fw-light">{{ number_format($item->products->selling_price * $item->prod_qty) }} VNĐ</h6>
                </div>
                <div class="col-md-2 my-auto">
                    <button class="btn btn-danger rounded-pill delete-cart-item">Remove <i class="fa fa-thin fa-trash"></i>
                    </button>
                </div>
            </div>  
            @endforeach
        </div>
        <div class="card-footer">
            <h6 class="fw-bold">Total Price : {{ number_format($total) }} VNĐ
                <a href="{{ url('checkout') }}" class="btn btn-outline-dark rounded-pill float-end my-auto">Proceed CheckOut <i class="fab fa-cc-paypal"></i></a>
            </h6>    
        </div>
        @else
            <div class="container">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('assets/images/bg.png') }}" height="400px" width="550px" alt="">
                        </div>
                        <div class="col-md-6 text-center">
                            <h4>No products in your Cart</h4>
                            <hr>
                            <a href="{{ url('/') }}" class="btn btn-dark rounded-pill text-light">Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

@endsection