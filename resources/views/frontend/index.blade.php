@extends('layouts.front')

@section('title')
Welcome to HMSHOP
@endsection

@section('content')
@include('layouts.inc.slider')


<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>Trending Category</h2>
            <hr>
           <div class="owl-carousel featured_carousel owl-theme">
            @foreach ($trending_category as $tcategory)
            <div class="item">
                <a href="{{ url('category/'.$tcategory->slug)}}">
                    <div class="card p-5 shadow p-3 mb-5 bg-body rounded-pill overflow-hidden">
                        <img src="{{ asset('assets/uploads/category/'.$tcategory->image) }}" height="100%" alt="image here">
                    </div>
                </a>
            </div>
            @endforeach
           </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>Featured Product</h2>
            <hr>
            <div class="owl-carousel featured_carousel1 owl-theme">
            @foreach ($featured_products as $prod)
            <div class="item">
                <a href="{{ url('category/'.$tcategory->slug.'/'.$prod->slug) }}">
                    <div class="card border-0 shadow mb-5 bg-body rounded-3 overflow-hidden ">
                        <h2 class="mb-0">
                        <label style="font-size : 16px;" class="badge bg-danger rounded-pill trending-tag">Trending</label>
                    </h2>
                        <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" alt="Product image">
                        <div class="card-body">
                            <h5>{{ $prod->name }}</h5>
                            <span class="float-start">{{ number_format($prod->selling_price) }} VNĐ</span>
                            <span class="float-end"><s>{{ number_format($prod->original_price) }} VNĐ</s></span>
                            {{-- <div class="d-flex justify-content-center mt-5"><button type="button" class="btn btn-dark  addToCartBtn">Add to
                                Cart <i class="fa fa-duotone fa-cart-shopping"></i></button></div> --}}
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>All Product</h2>
            <hr>
            {{-- <div class="owl-carousel featured_carousel owl-theme"> --}}
            @foreach ($all_products as $allprod)
            <div class="col-md-4 mt-3">
                <a href="{{ url('category/'.$tcategory->slug.'/'.$allprod->slug) }}">
                    <div class="card border-0 shadow mb-5 bg-body rounded-3 overflow-hidden">
                        <img src="{{ asset('assets/uploads/products/'.$allprod->image) }}" height="400px" alt="Product image">
                        <div class="card-body">
                            <h5>{{ $allprod->name }}</h5>
                            <span class="float-start">{{ number_format($allprod->selling_price) }} VNĐ</span>
                            <span class="float-end"><s>{{ number_format($allprod->original_price) }} VNĐ</s></span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            {{-- </div> --}}
        </div>
        <nav >
            <ul class="pagination pagination-circle float-end md-3">
                <li class="page-item">
                    <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                {{ $all_products->links() }}
                <li class="page-item">
                    <a class="page-link" href="javascript: void(0);" aria-label="Next">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@endsection

@section('scripts')
<script>
$('.featured_carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout:2500,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 8
        }
    }
})
$('.featured_carousel1').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout:3500,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
})
</script>
@endsection