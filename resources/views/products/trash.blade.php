@extends('products.layout')

@section('content')
  <h2 class="text-center mt-3">Trash</h2>
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
            <form action="{{ route('products.destroy', $item->id) }}" class="d-inline-block" method="POST">
              @csrf
              {{ method_field('DELETE') }}
              <button type="submit" class="btn btn-danger">Delete For Ever</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {!! $products->links() !!}
@endsection