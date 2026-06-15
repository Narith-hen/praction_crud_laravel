@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Category</h1>
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
        <a href="{{ route('categories.create') }}" class="btn btn-info"> create+</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $index => $category)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <a href="#" role="button" data-bs-toggle="modal"
                                data-bs-target="#showCategory{{ $category->id }}">View</a>
                            |
                            <a href="{{ route('categories.edit', $category->id) }}">edit</a>
                            |
                            <a href="#" role="button" data-bs-toggle="modal"
                                data-bs-target="#deleteCategory{{ $category->id }}">delete</a>
                        </td>
                    </tr>
                    @include('categories.show', ['category' => $category])
                    @include('categories.delete', ['category' => $category])
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
