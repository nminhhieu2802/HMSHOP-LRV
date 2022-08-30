@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
    <div class="card-header bg-dark">
        <h1 class="fw-bold text-light">Product Page</h1>
    </div>
    <div class="card-body">
        <table id="myDataTable" class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Original Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->original_price }}</td>
                    <td>
                        <img src="{{ asset('assets/uploads/products/'.$item->image) }}"class="cate-image"
                            alt="Image here">
                    </td>
                    <td>
                        <a href="{{ url('edit-product/'.$item->id) }}" class="btn btn-dark text-light fw-bolder">Edit</a>
                        <a href="{{ url('delete-product/'.$item->id) }}" class="btn btn-danger text-light fw-bolder">Delete</a>
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
            {{ $products->links() }}
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