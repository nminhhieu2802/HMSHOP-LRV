@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
    <div class="card-header bg-dark">
        <h1 class="text-light fw-bold">Add Product</h1>
    </div>
    <div class="card-body">
        <form action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <select class="form-select " name="cate_id">
                        <option value="">Select a Category</option>
                        @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control border" name="name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" class="form-control border" name="slug">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Small Description</label>
                    <textarea name="small_description" rows="3" class="form-control border"></textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description" rows="3" class="form-control border"></textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Original Price</label>
                    <input type="number" class="form-control border" name="original_price">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Selling Price</label>
                    <input type="number" class="form-control border" name="selling_price">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Tax</label>
                    <input type="number" class="form-control border" name="tax">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Quantity</label>
                    <input type="number" class="form-control border" name="qty">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" name="status">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Trending</label>
                    <input type="checkbox" name="trending">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control border">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea name="meta_keywords" rows="3" class="form-control border"></textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description" rows="3" class="form-control border"></textarea>
                </div>
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