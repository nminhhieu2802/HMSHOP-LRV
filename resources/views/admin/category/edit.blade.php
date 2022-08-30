@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
    <div class="card-header bg-dark">
        <h1 class="fw-bold text-light">Edit/Update Category</h1>
    </div>
    <div class="card-body">
        <form action="{{ url('update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" value="{{ $category->name }}" class="form-control border" name="name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" value="{{ $category->slug }}" class="form-control border" name="slug">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description" rows="3" class="form-control border">{{ $category->description }} </textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" name="status" {{ $category->status ==  1 ? 'checked':'' }}>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Popular</label>
                    <input type="checkbox" name="popular" {{ $category->popular ==  1 ? 'checked':'' }}>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" value="{{ $category->meta_title }}" name="meta_title" class="form-control border">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea name="meta_keywords" rows="3"
                        class="form-control border">{{ $category->meta_keywords }} </textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Description</label>
                    <textarea name="meta_descrip" rows="3"
                        class="form-control border">{{ $category->meta_descrip }} </textarea>
                </div>
                @if($category->image)
                <img src="{{ asset('assets/uploads/category/'.$category->image) }}" style="width:300px;" alt="Category image">
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