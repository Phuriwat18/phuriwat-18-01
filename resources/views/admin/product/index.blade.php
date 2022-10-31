@extends('layouts.back-end.master')
@section('content')
<div class="card">
    <h5 class="card-header">Products</h5>
    <div class="table-responsive text-nowrap">
        <a href="{{route('product.create')}}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
      <table class="table mt-4">
        <thead class="table-dark">
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>images</th>
            <th>Price</th>
            <th>Description</th>
            <th>category</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach ($product as $item)
          <tr>
            <td>{{ $product->firstItem()+$loop->index}}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->image }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->category->name }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
          <td>
            <a href="{{ route('product.edit',$item->product_id) }}"><i class='bx bxs-edit'>Edit</i></a>
            <a href="{{ route('product.delete',$item->product_id) }}"><i class='bx bx-trash'>Delete</i></a>
          </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  {{ $product->links('pagination::bootstrap-5') }}
@endsection