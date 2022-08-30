@extends('layouts.front')

@section('title')
{{ $category->name }}
@endsection

@section('content')

<div class="py-3 mb-4 shadow-sm bg-dark text-light border-top">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url('category') }}" class="text-light" >
                Collections
            </a> /
            <a href="{{ url('category/'.$category->slug) }}" class="text-light">
                {{ $category->name }}
            </a>
        </h6>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>{{ $category->name }}</h2>
            @foreach ($products as $prod)
            <div class="col-md-4 mb-3">
                <a href="{{ url('category/'.$category->slug.'/'.$prod->slug) }}">
                    <div class="card shadow  mb-5 bg-body rounded-3 overflow-hidden">
                        <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" height="auto" width="auto" alt="Product image">
                        <div class="card-body">
                            <h5>{{ $prod->name }}</h5>
                            <span class="float-start">{{ number_format($prod->selling_price) }} VNĐ</span>
                            <span class="float-end"><s>{{ number_format($prod->original_price) }} VNĐ</s></span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection