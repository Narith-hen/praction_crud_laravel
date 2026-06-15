@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input name ="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <div class="form-floating">
                            <textarea name="description" style="height: 150px" class="form-control" id="description"></textarea>
                            <label for="description">Description</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
