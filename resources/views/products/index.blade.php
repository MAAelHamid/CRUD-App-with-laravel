@extends('products.layout')

@section('content')
  <h2 class="text-center mt-3">Home</h2>
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
            <a href="{{ route('soft.delete',$item->id) }}" class="btn btn-danger">Soft Delete</a>
            <form action="{{ route('products.destroy', $item->id) }}" class="d-inline-block" method="POST">
              @csrf
              {{ method_field('DELETE') }}
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {!! $products->links() !!}
@endsection