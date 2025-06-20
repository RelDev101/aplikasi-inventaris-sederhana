@extends('layouts.main')

@section('header')
    <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Product/Items</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products/Items</li>
            </ol>
          </div>
        </div>
@endsection

@section('content')
    <div class="row">
      <div class="col">
        {{-- @if ($errors->any())
          @dd($errors->all())
        @endif --}}
        <form action="/products/store" method="POST">
          @csrf
          @method('POST')
          <div class="card">
            <div class="card-body">
              {{-- Form --}}
              <div class="form-group">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                @error('name')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <textarea 
                  name="description" 
                  id="description" 
                  cols="30" 
                  rows="10" 
                  class="form-control" @error('description') is-invalid @enderror>{{ old('description') }}</textarea>
                  @error('description')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="sku" class="form-label">Code</label>
                <input type="text" name="sku" id="sku" class="form-control @error('sku') is-invalid @enderror" value="{{ old('sku') }}">
                @error('sku')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="price" class="form-label">Price</label>
                <input type="number" inputmode="numeric" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
                @error('price')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" inputmode="numeric" name="stock" id="stock" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock') }}">
                @error('stock')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="category_id" class="form-label">Category</label>
                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
                @error('category_id')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
              </div>
              {{-- End Form --}}
            </div>
            <div class="card-footer">
              <div class="d-flex justify-content-end">
                <a href="/products" class="btn btn-outline-secondary mr-2">Cancel</a>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
@endsection