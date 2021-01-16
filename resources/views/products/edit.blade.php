@extends('products.layout')

@section('content')
  <h2 class="text-center mt-3">Edit</h2>
  <a href="{{ route('products.index') }}">Home</a>
  <form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    <div class="mb-3 mt-5">
      <label for="name" class="form-label">Product Name</label>
      <input type="text" name="name" class="form-control" id="name" value="{{ $product->name }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="price" class="form-label">Product Price</label>
      <input type="text" name="price" class="form-control" id="price" value="{{ $product->price }}">
    </div>
    <div class="mb-3 mt-5">
      <label for="description" class="form-label">Product Description</label>
      <textarea type="textarea" name="details" class="form-control" id="description">{{ $product->details }}</textarea>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
@endsection