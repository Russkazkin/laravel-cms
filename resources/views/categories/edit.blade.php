@extends('layouts.app')

@section('title')
    Edit category
@endsection

@section('content')
<div class="container">
    <h1>Edit category {{ $category->name }}</h1>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit category
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item">
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="/categories/{{ $category->id }}/update-category" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="text"
                                   class="form-control"
                                   name="name"
                                   placeholder="Name"
                                   value="{{ $category->name }}">
                        </div>
                        <div class="form-group">
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Update category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
