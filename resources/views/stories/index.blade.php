
@extends('layouts.app2')

@section('content')
    <h1>Stories</h1>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <a href="{{ route('stories.create') }}">Create Story</a>
    @foreach($stories as $story)
        <div>
            <h2><a href="{{ route('stories.show', $story->id) }}">{{ $story->title }}</a></h2>
            <p>{{ $story->body }}</p>
            @if($story->image)
                <img src="{{ asset('storage/images/'.$story->image) }}" alt="{{ $story->title }}" style="width:100px;">
            @endif
            <a href="{{ route('stories.edit', $story->id) }}">Edit</a>
            <form action="{{ route('stories.destroy', $story->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection
