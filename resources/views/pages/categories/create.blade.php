@extends('layouts.main')

@section('header')
    <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div>
        </div>
@endsection

@section('content')
    @if ($errors->any())
    <script>
        Swal.fire({
          title: "Something wrong..",
          text: "@foreach($errors->all() as $error) {{ $error }} @endforeach",
          icon: "error"
        });
    </script>
    @endif
    <div class="row">
      <div class="col">
        <form action="/categories/store" method="POST">
          @csrf
          @method('POST')
          <div class="card">
            <div class="card-body">
              {{-- Form --}}
              <div class="form-group">
                <label for="name" class="form-label">Category Name</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                @error('name')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              {{-- End Form --}}
            </div>
            <div class="card-footer">
              <div class="d-flex justify-content-end">
                <a href="/categories" class="btn btn-outline-secondary mr-2">Cancel</a>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
@endsection