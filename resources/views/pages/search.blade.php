@extends('frontend.layouts.searchapps')

@section('styles')
@endsection

@section('content')
<div class="body-wrapper">
 <!-- navbarsection -->
 


                       
                        
                        <p class="sub-heading mb-1">Best matches</p>
                       <!-- Display featured posts -->
                       @foreach ($paginatedMergedItems as $post)
                       {{-- Display post details here --}}
                       <h2>{{ $post->featured }}</h2>
                       
                       {{-- Add other post details as needed --}}
                   @endforeach
                   {{-- @php
                       dd($paginatedPosts->links());
                   @endphp --}}
                   
                   {{-- Display pagination links --}}
                   {{ $paginatedMergedItems->links() }}


@endsection

@section('scripts')
@endsection
