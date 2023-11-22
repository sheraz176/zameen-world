@extends('frontend.layouts.apps')

@section('styles')

@endsection

@section('content')

<section class="all-p my-5">
    <div class="container-fluid px-1">
      <div class="row">
        
        @foreach($agents as $agent)
        <div class="col-xl-4">
            <a href="{{ route('agents.show',$agent->id) }}">
          <div class="showing-cards position-relative">
            <div class="img-wraper position-relative">
              @if (!empty($agent->image))
              <img src="{{Storage::url('users/'.$agent->image)}}" >
              @else
              <img src="{{ asset('zameen/55929607.png ') }}">
              @endif
                  
            </div>
            <div class="card-text-warrper">
                <div class="d-flex flex-row justify-content-between mb-3">
                    <span class="showing-time"></span>
                    <span class="showing-time">{{ $agent->created_at }}</span>
                  </div>
              <div class="plan-text-sec d-flex flex-column gap-1">
                <h3>{{ $agent->name }}</h3>
                <p>{{ str_limit($agent->about,50) }}</p>
              </div>
              <hr>
          
              <div>
                <ul class="p-0 list-unstyled d-flex flex-column gap-3 show-card-list pt-3">
                  <li>
                    <div class="d-flex flex-row justify-content-between">
                      <span class="show-muted">Email</span>
                      <span class="feature-child">{{ $agent->email }}</span>
                    </div>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
            </a>
        </div>
        @endforeach
      </div>
    </div>
  </section>

@endsection

@section('scripts')

@endsection