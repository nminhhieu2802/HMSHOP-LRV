@extends('layouts.front')

@section('title',$products->name)


@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="{{ url('/add-rating') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $products->id }}">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rate {{ $products->name }} ({{ $products->description }})</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="rating-css">
                    <div class="star-icon">
                        @if($user_rating)
                            @for($i = 1 ; $i <=$user_rating->stars_rated;$i++)
                                <input type="radio" value="{{ $i }}" name="product_rating" checked id="rating{{ $i }}">
                                <label for="rating{{ $i }}" class="fa fa-star"></label>
                            @endfor
                            @for($j = $user_rating->stars_rated+1; $j <= 5; $j++)
                                <input type="radio" value="{{ $j }}" name="product_rating" id="rating{{ $j }}">
                                <label for="rating{{ $j }}" class="fa fa-star"></label>
                            @endfor
                            
                        @else
                            <input type="radio" value="1" name="product_rating" checked id="rating1">
                            <label for="rating1" class="fa fa-star"></label>
                            <input type="radio" value="2" name="product_rating" id="rating2">
                            <label for="rating2" class="fa fa-star"></label>
                            <input type="radio" value="3" name="product_rating" id="rating3">
                            <label for="rating3" class="fa fa-star"></label>
                            <input type="radio" value="4" name="product_rating" id="rating4">
                            <label for="rating4" class="fa fa-star"></label>
                            <input type="radio" value="5" name="product_rating" id="rating5">
                            <label for="rating5" class="fa fa-star"></label>
                        @endif
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-black border" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>
        </form>
    </div>
  </div>
</div>

<div class="py-3 mb-4 shadow-sm bg-dark text-light border-top">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url('category') }}" class="text-light">
                Collections
            </a> /
            <a href="{{ url('category/'.$products->category->slug) }}" class="text-light">
                {{ $products->category->name }}
            </a> /
            <a href="{{ url('category/'.$products->category->slug.'/'.$products->slug) }}" class="text-light">
                {{ $products->name }}
            </a>
        </h6>
    </div>
</div>

<div class="container">
    <div class="card shadow product_data">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 border-right">
                    <img src="{{ asset('assets/uploads/products/'.$products->image) }}" class="w-100" alt="">
                </div>
                <div class="col-md-8">
                    <h2 class="mb-0">
                        {{ $products->name }}
                        @if($products->trending == '1')
                        <label style="font-size : 16px;" class="float-end badge bg-danger rounded-pill trending-tag">Trending</label>
                        @endif
                    </h2>

                    <hr>
                    <label class="me-3">Original Price : <s>{{ number_format($products->original_price) }} VNĐ</s></label>
                    <label class="fw-bold"> Selling Price : {{ number_format($products->selling_price) }} VNĐ</label>
                    @php
                        $ratenum = number_format($rating_value)
                    @endphp
                    <div class="rating">
                        @for($i = 1 ; $i <=$ratenum;$i++)
                            <i class="fa fa-star checked"></i>
                        @endfor
                        @for($j = $ratenum+1; $j <= 5; $j++)
                            <i class="fa fa-star"></i>
                        @endfor
                        <span>
                            @if($ratings->count() > 0)
                                {{ $ratings->count() }} Ratings</span>
                            @else
                                No Ratings
                            @endif
                    </div>
                    <p class="mt-3">
                        {!! $products->small_description !!}
                    </p>
                    <p class="mt-3">
                        {!! $products->meta_keywords !!}
                        {!! $products->meta_description !!}
                    </p>
                    <hr>
                    @if($products->qty >0)
                    <label class="badge bg-dark rounded-pill">In stock</label>
                    @else
                    <label class="badge bg-danger rounded-pill">Out of stock</label>
                    @endif
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <input type="hidden" value="{{ $products->id }}" class="prod_id">
                            <label for="Quantity">Quantity</label>
                            <div class="input-group text-center mb-3" style="width:150px">
                                <button class="input-group-text decrement-btn btn btn-dark rounded-pill">-</button>
                                <input type="text" name="quantity" class="form-control qty-input text-center rounded-pill" value="1">
                                <button class="input-group-text increment-btn btn-dark rounded-pill">+</button>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <br />
                            @if($products->qty >0)
                                <button type="button" class="btn btn-outline-dark me-3 addToCartBtn rounded-pill float-start">Add to
                                Cart <i class="fa fa-duotone fa-cart-shopping"></i></button>
                                <button type="button" class="btn btn-outline-danger me-3 addToWishlist rounded-pill float-start">Add to Wishlist <i class="fa fa-thin fa-heart"></i></button>
                            @else
                                <button type="button" class="btn btn-outline-danger me-3 addToWishlist rounded-pill float-start">Add to Wishlist <i class="fa fa-thin fa-heart"></i></button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <hr>
                <h3>Description</h3>
                <p class="mt-3">
                    {!! $products->meta_keywords !!}
                    {!! $products->meta_description !!}
                </p>
                <hr>
                <button type="button" class="btn btn-dark rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Rate this Product
                </button>
            </div>
        </div>
    </div>
</div>

@endsection
