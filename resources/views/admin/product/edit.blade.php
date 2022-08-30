@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
    <div class="card-header bg-dark">
        <h1 class="text-light fw-bold">Edit Product</h1>
    </div>
    <div class="card-body">
        <form action="{{ url('update-product/'.$products->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="">Category</label>
                    <select class="form-select ">
                        <option value="">{{ $products->category->name }}</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control border" value={{ $products->name }} name="name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" class="form-control border" value={{ $products->slug }} name="slug">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Small Description</label>
                    <textarea name="small_description" rows="3"
                        class="form-control border">{{ $products->small_description }}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description" rows="3" class="form-control border">{{ $products->description }}</textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Original Price</label>
                    <input type="number" class="form-control border" value={{ $products->original_price }}
                        name="original_price">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Selling Price</label>
                    <input type="number" class="form-control border" value={{ $products->selling_price }} name="selling_price">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Tax</label>
                    <input type="number" class="form-control border" value={{ $products->tax }} name="tax">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Quantity</label>
                    <input type="number" class="form-control border" value={{ $products->qty }} name="qty">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" name="status" {{ $products->status ==  1 ? 'checked':'' }}>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Trending</label>
                    <input type="checkbox" name="trending" {{ $products->trending ==  1 ? 'checked':'' }}>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" value={{ $products->meta_title }} class="form-control border">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea name="meta_keywords" rows="3"
                        class="form-control border">{{ $products->meta_keywords }}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description" rows="3"
                        class="form-control border">{{ $products->meta_description }}</textarea>
                </div>
                @if($products->image)
                <img src="{{ asset('assets/uploads/products/'.$products->image) }}" style="width:200px" alt="Product image">
                @endif
                <div class="col-md-12 mb-3">
                    <input type="file" name="image" class="form-control border">
                </div>
                <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-dark text-light fw-bold">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@endsection