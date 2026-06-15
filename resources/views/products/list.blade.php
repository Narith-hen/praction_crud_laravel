@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Product</h1>
        <div class="flex gap-6 justify-center">
            <a href="{{ route('categories.index') }}"
                class="px-6 py-3 bg-indigo-500 text-blue-500 border font-semibold rounded-full
                      hover:bg-indigo-400 hover:scale-105
                      transition-all duration-300 shadow-lg">
                Category
            </a>

            <a href="{{ route('products.index') }}"
                class="px-6 py-3 bg-indigo-500 text-blue-500 border font-semibold rounded-full
                      hover:bg-indigo-400 hover:scale-105
                      transition-all duration-300 shadow-lg">
                Product
            </a>
        </div>
        <a href="{{ route('products.create') }}" class="btn btn-info"> create+</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $index => $product)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $product->category->name ?? '' }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->image }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>
                            <a href="#" role="button" data-bs-toggle="modal"
                                data-bs-target="#showProduct{{ $product->id }}">View</a>
                            |
                            <a href="{{ route('products.edit', $product->id) }}">edit</a>
                            |
                            <a href="#" role="button" data-bs-toggle="modal"
                                data-bs-target="#deleteProduct{{ $product->id }}">delete</a>
                        </td>
                    </tr>
                    @include('products.show', ['product' => $product])
                    @include('products.delete', ['product' => $product])
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
