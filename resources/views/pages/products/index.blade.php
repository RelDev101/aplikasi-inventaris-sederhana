@extends('layouts.main')

@section('header')
    <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products/Items</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Products/Items</li>
            </ol>
          </div>
        </div>
@endsection

@section('content')
    @if (session('success'))
    <script>
        Swal.fire({
          title: "Success!",
          text: "{{ session('success') }}",
          icon: "success"
        });
    </script>
    @endif
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header d-flex justify-content-end">
            <a href="/products/create" class="btn btn-primary">
              Add Product
            </a>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Product/Item</th>
                  <th>Description</th>
                  <th>Code</th>
                  <th>Price</th>
                  <th>Stock</th>
                  <th>Category</th>
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                  <tr>
                    <td>{{ ($products->currentPage() - 1 ) * $products->perPage() + $loop->index + 1 }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description ?? '-' }}</td>
                    <td>{{ $product->sku }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>
                      <div class="d-flex">
                        <a href="/products/edit/{{ $product->id }}" class="btn btn-sm btn-warning mr-2">
                        Edit
                      </a>
                      {{-- <form action="/products/{{ $product->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">
                          Delete
                        </button>
                      </form> --}}
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $product->id }}">
                            Delete
                        </button>
                      </div>
                    </td>
                  </tr>
                  @include('pages.products.delete-confirmation')
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="card-footer">
            {{ $products->links('pagination::bootstrap-5') }}
          </div>
        </div>
      </div>
    </div>
@endsection