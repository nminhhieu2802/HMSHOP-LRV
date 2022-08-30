@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
    <div class="card-header bg-dark">
        <h1 class="text-light fw-bold">Category Page</h1>
    </div>
    <div class="card-body">
        <table id="myDataTable" class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <img src="{{ asset('assets/uploads/category/'.$item->image) }}" class="cate-image"
                            alt="Image here">
                    </td>
                    <td>
                        <a href="{{ url('edit-category/'.$item->id) }}" class="btn btn-dark text-light fw-bold">Edit</a>
                        <a href="{{ url('delete-category/'.$item->id) }}" class="btn btn-danger text-light fw-bold">Delete</a>
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
            {{ $category->links() }}
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
        $(document).ready( function () {
            $('#myDataTable').DataTable();
        } );
    </script>
@endsection