@extends('products.layout')

@section('content')
  {{-- <div class="card mt-5 text-center">
    <div class="card-body">
      <h5 class="card-title">Super Market</h5>
      <p class="card-text">U Can Add Items To Be Selled Here</p>
      <a href="{{ route('products.create') }}" class="btn btn-primary">Create</a>
    </div>
  </div> --}}

  <form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="mb-3 mt-5">
      <label for="name" class="form-label">Product Name</label>
      <input type="text" name="name" class="form-control" id="name">
    </div>
    <div class="mb-3 mt-5">
      <label for="price" class="form-label">Product Price</label>
      <input type="text" name="price" class="form-control" id="price">
    </div>
    <div class="mb-3 mt-5">
      <label for="description" class="form-label">Product Description</label>
      <textarea type="textarea" name="details" class="form-control" id="description"></textarea>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
@endsection