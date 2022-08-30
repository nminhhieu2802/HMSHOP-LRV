@extends('layouts.front')

@section('title')
Category
@endsection

@section('content')
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>All Category</h2>
                <div class="row">
                    @foreach($category as $cate)
                    <div class="col-md-2 mb-3">
                        <a href="{{ url('category/'.$cate->slug)}}">
                            <div class="card p-5 shadow p-3 mb-5 bg-body rounded-pill overflow-hidden">
                                <img src="{{ asset('assets/uploads/category/'.$cate->image) }}" height="70px" alt="Category image">
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection