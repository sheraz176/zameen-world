@extends('layouts.app2')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">{{ $story->title }}</h1>
            <p class="card-text">{{ $story->body }}</p>
            @if($story->image)
                <img src="{{ asset('storage/images/'.$story->image) }}" alt="{{ $story->title }}" class="img-fluid mb-3" style="max-width: 100%;">
            @endif
            <a href="{{ route('stories.edit', $story->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('stories.destroy', $story->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('stories.index') }}" class="btn btn-secondary">Back to Stories</a>
        </div>
    </div>
</div>
@endsection

@section('styles')
    <style>
        body {
            background-color: #f0f2f5;
            font-family: Arial, sans-serif;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
        }

        .btn-primary {
            background-color: #1877f2;
            border-color: #1877f2;
        }

        .btn-primary:hover {
            background-color: #145dbf;
            border-color: #145dbf;
        }

        .btn-danger {
            background-color: #e60023;
            border-color: #e60023;
        }

        .btn-danger:hover {
            background-color: #b8001a;
            border-color: #b8001a;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
    </style>
@endsection

