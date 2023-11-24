@extends('frontend.layouts.searchapps')

@section('styles')
@endsection

@section('content')
<div class="body-wrapper">
 <!-- navbarsection -->
 


                        <p class="sub-heading mb-1">Best matches</p>
                        @php
                            $datas = [];
                             foreach ($slicedData as $key => $data) {
                               if ($data->superhot=='1') {
                                array_push($datas,$data);
                               }
                             }
                             foreach ($slicedData as $key => $data) {
                               if ($data->hot=='1') {
                                array_push($datas,$data);
                               }
                             }
                             foreach ($slicedData as $key => $data) {
                               if ($data->featured=='1') {
                                array_push($datas,$data);
                               }
                             }
                             foreach ($slicedData as $key => $data) {
                               if ($data->featured=='0' AND $data->hot=='0' AND $data->superhot=='0') {
                                array_push($datas,$data);
                               }
                             }

                        @endphp
                       <!-- Display featured posts -->
                       @foreach ($datas as $post)
                       {{-- Display post details here --}}
                       @if ($post->superhot=='1')
                           superhot
                       @endif
                       @if ($post->hot=='1')
                       hot
                       @endif
                       @if ($post->featured=='1')
                        featured
                         @endif
                         <br>
                         @if ($post->featured=='0' AND $post->hot=='0' AND $post->superhot=='0' )
                        normal
                         @endif
                       {{-- <p>{{ $post->superhot }} {{ $post->hot }} >{{ $post->featured }}</p> --}}
                       
                       {{-- Add other post details as needed --}}
                   @endforeach
                   {{-- @php
                       dd($paginatedPosts->links());
                   @endphp --}}
                   
                   {{-- Display pagination links --}}
                   {{ $slicedData->links() }}


@endsection

@section('scripts')
@endsection
