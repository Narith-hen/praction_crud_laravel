@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category:</label>
                        <select name="category_id" id="category_id" class="form-select">
                            <option value="">-- Select --</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input name ="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image URL</label>
                        <input name="image" type="text" class="form-control" id="image">
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input name="price" type="number" step="0.01" class="form-control" id="price">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input name="stock" type="number" class="form-control" id="stock">
                        </div>
                    </div>
                    <div class="mb-3">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
