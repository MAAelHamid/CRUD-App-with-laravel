@extends('products.layout')

@section('content')
  <h2 class="text-center mt-3">Show</h2>
  <h2>{{ $product->name }} details</h2>
  <div class="mb-3 mt-5">
    <label for="name" class="form-label">Product Name</label>
    <input type="text" name="name" class="form-control" id="name" value="{{ $product->name }}" readonly>
  </div>
  <div class="mb-3 mt-5">
    <label for="price" class="form-label">Product Price</label>
    <input type="text" name="price" class="form-control" id="price" value="{{ $product->price }}" readonly>
  </div>
  <div class="mb-3 mt-5">
    <label for="description" class="form-label">Product Description</label>
    <textarea type="textarea" name="details" class="form-control" id="description" rows="10" readonly>{{ $product->details }}</textarea>
  </div>
@endsection