@extends('layouts.app2')

@section('content')
    <h1>Edit Story</h1>

    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('stories.update', $story->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $story->title }}">
        </div>
        <div>
            <label for="body">Body:</label>
            <textarea name="body" id="body">{{ $story->body }}</textarea>
        </div>
        <div>
            <label for="image">Image:</label>
            <input type="file" name="image" id="image">
            @if($story->image)
                <img src="{{ asset('storage/images/'.$story->image) }}" alt="{{ $story->title }}" style="width:100px;">
            @endif
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
