<div class="col-md-4">
    <div class="single-cards-slider buy-page-card">
      <a
          href="{{ route('property.show', [$property->slug, $property->random_id]) }}">
          <div class="img-wraper">
              @if (!empty($property->image))
                  <img src="{{ Storage::url('property/' . $property->image) }}">
              @elseif(!empty($property->location_latitude))
                  <iframe width="100%" height="400" frameborder="0"
                      scrolling="no" marginheight="0" marginwidth="0"
                      loading="lazy"
                      src="https://maps.google.com/maps?q={{ $property->address }},{{ $property->location_latitude }},{{ $property->location_longitude }}&z=15&output=embed">
                  </iframe>
              @else
                  <img src="{{ asset('zameen/house.png') }}">
              @endif
              <div class="badge-review d-flex flex-row justify-content-between px-3 align-items-start position-absolute flex-nowrap w-100 "
                  style="margin-top: -3%">
                  <div><span class="badge-for-all"
                          style="color:rgb(202, 26, 26)">{{ $property->purpose }}
                          for {{ $property->type }}</span></div>
              </div>
          </div>
          <div class="card-text-warrper">
            <div class="rib">
                {{ $property->purpose }}
                      for {{ $property->type }}
            </div>
              {{-- <div class="tag-img">
                  <img
                      src=" {{ asset('zameen/assets/images/hot.jpeg') }}">
              </div> --}}
              <div
                  class="heart-sec d-flex flex-row justify-content-between mt-3 align-items-center">

                  <h3>Rs {{ formatPrice($property->price) }}</h3>
                  <img src=" {{ asset('zameen/assets/images/favorited.png') }}">
              </div>


              <div class="plan-text-sec d-flex flex-column gap-1">
                  <h3 class="line-clamp-one">{{ $property->title }} </h3>
                  <p class="line-clamp-one">{{ ucfirst($property->address) }}
                  </p>
              </div>
              <hr />
      </a>
      <hr />
      <div class="icons-section">
        <div class="d-flex flex-row justify-content-between my-2">
            <div class="d-flex flex-row gap-1 align-items-center">
                <div>
                    <img src=" {{ asset('zameen/assets/images/bed.png') }}" />
                </div>
                <p>
                    @if (!empty($property->bedroom))
                        {{ $property->bedroom }}
                    @else
                        --
                    @endif
                    Beds
                </p>
            </div>
            <div class="d-flex flex-row gap-1 align-items-center">
                <div>
                    <img
                        src=" {{ asset('zameen/assets/images/bath.png') }}" />
                </div>
                <p>
                    @if (!empty($property->bathroom))
                        {{ $property->bathroom }}
                    @else
                        --
                    @endif
                    Bath
                </p>
            </div>
            <div class="d-flex flex-row gap-1 align-items-center">
                <div>
                    <img
                        src=" {{ asset('zameen/assets/images/SquareMeters.png') }}" />
                </div>
                <p>{{ $property->area }} {{ $property->unit }}</p>
            </div>

        </div>
        <div class="card-body d-flex flex-row gap-2 algin-items-center">
             @include('frontend.partials.action') 

            @include('frontend.partials.whatsapp')
        </div>
    </div>
     </div>
  </div>
</div>