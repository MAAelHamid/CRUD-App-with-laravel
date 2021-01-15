@extends('products.layout')

@section('content')
  <div class="card mt-5 text-center">
    <div class="card-body">
      <h5 class="card-title">Super Market</h5>
      <p class="card-text">U Can Add Items To Be Selled Here</p>
      <a href="{{ route('products.create') }}" class="btn btn-primary">Create</a>
    </div>
  </div>

  <div>
    @if ($message = Session::get('success'))
      <div class="alert alert-success mt-3">
        {{ $message }}
      </div>
    @endif
  </div>

  <table class="table mt-5">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Product Name</th>
        <th scope="col">Product Price</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @php
          $i = 0;
      @endphp
      @foreach ($products as $item)
        <tr>
          <th scope="row">{{ ++ $i }}</th>
          <td>{{ $item->name }}</td>
          <td>{{ $item->price }}</td>
          <td>
            <a href="{{ route('products.edit',$item->id) }}" class="btn btn-success">Edit</a>
            <a href="{{ route('products.show', $item->id) }}" class="btn btn-info">Show</a>
            <form action="{{ route('products.destroy', $item->id) }}" class="d-inline-block">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {!! $products->links() !!}
@endsection