@extends('layouts.app')

@section('title')
    Create new category
@endsection

@section('content')
<div class="container">
    <h1>Create category</h1>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Create new category
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
                    <form action="/store-category" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Create category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
