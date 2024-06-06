<div class="wrapper-for-all">
    <div class="custom-container">
      <div class="inner-container">
        <div class="search-hits-header d-flex flex-row justify-content-between gap-3">
          <div class="d-flex flex-row gap-2 align-items-center">
            <span class="summary-text">1 to 25 of 21,787 Houses</span>
            <div class="with-border">
              <select class="js-example-basic-single w-100" name="state">
                <option value="AL">Newest</option>
                ...
                <option value="WY">Shop</option>
              </select>
            </div>
          </div>
          <div class="d-flex flex-row gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="grid-list-svg active" viewBox="0 0 32 32" id="list-view">
              <path
                d="M4.6 4.3c0 1.3-1 2.3-2.3 2.3S0 5.6 0 4.3C0 3 1 2 2.3 2s2.3 1 2.3 2.3M11.5 2h18.3C31 2 32 3 32 4.3c0 1.3-1 2.3-2.3 2.3H11.5a2.6 2.6 0 0 1-2.3-2.3c0-1.3 1-2.3 2.3-2.3zM4.6 16c0 1.3-1 2.3-2.3 2.3S0 17.3 0 16s1-2.3 2.3-2.3 2.3 1 2.3 2.3m6.9-2.3h18.3c1.2.1 2.2 1.1 2.3 2.3 0 1.3-1 2.3-2.3 2.3H11.5A2.6 2.6 0 0 1 9.2 16c0-1.3 1-2.3 2.3-2.3zm-6.9 14c0 1.3-1 2.3-2.3 2.3S0 29 0 27.7s1-2.3 2.3-2.3 2.3 1 2.3 2.3m6.9-2.3h18.3c1.2.1 2.2 1.1 2.3 2.3 0 1.3-1 2.3-2.3 2.3H11.5a2.6 2.6 0 0 1-2.3-2.3c0-1.3 1-2.3 2.3-2.3z">
              </path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="grid-list-svg" viewBox="0 0 32 32" id="grid-view">
              <path
                d="M0 7V1.8C0 .8.8 0 1.8 0H7c1 0 1.8.8 1.8 1.8V7C8.8 8 8 8.8 7 8.8H1.8C.8 8.8 0 8 0 7zm25 1.8h5.2c1 0 1.8-.8 1.8-1.8V1.8c0-1-.8-1.8-1.8-1.8H25c-1 0-1.8.8-1.8 1.8V7c0 1 .8 1.8 1.8 1.8zm-11.6 0h5.2c1 0 1.8-.8 1.8-1.8V1.8c0-1-.8-1.8-1.8-1.8h-5.2c-1 0-1.8.8-1.8 1.8V7c0 1 .8 1.8 1.8 1.8zm-1.8 9.7c0 1 .8 1.8 1.8 1.8h5.2c1 0 1.8-.8 1.8-1.8v-5.2c0-1-.8-1.8-1.8-1.8h-5.2c-1 0-1.8.8-1.8 1.8v5.2zm0 11.7c0 1 .8 1.8 1.8 1.8h5.2c1 0 1.8-.8 1.8-1.8V25c0-1-.8-1.8-1.8-1.8h-5.2c-1 0-1.8.8-1.8 1.8v5.2zm18.6-7H25c-1 0-1.8.8-1.8 1.8v5.2c0 1 .8 1.8 1.8 1.8h5.2c1 0 1.8-.8 1.8-1.8V25c0-1-.8-1.8-1.8-1.8zm0-11.6H25c-1 0-1.8.8-1.8 1.8v5.2c0 1 .8 1.8 1.8 1.8h5.2c1 0 1.8-.8 1.8-1.8v-5.2c0-1-.8-1.8-1.8-1.8zM0 30.2c0 1 .8 1.8 1.8 1.8H7c1 0 1.8-.8 1.8-1.8V25c0-1-.8-1.8-1.8-1.8H1.8C.8 23.2 0 24 0 25v5.2zm0-11.6c0 1 .8 1.8 1.8 1.8H7c1 0 1.8-.8 1.8-1.8v-5.2c0-1-.8-1.8-1.8-1.8H1.8c-1 0-1.8.8-1.8 1.8v5.2z">
              </path>
            </svg>
          </div>
        </div>
<ul class="properties-cards active">
    @php
        $datas = [];
        foreach ($slicedData as $key => $data) {
            if ($data->superhot == '1') {
                array_push($datas, $data);
            }
        }
        foreach ($slicedData as $key => $data) {
            if ($data->hot == '1') {
                array_push($datas, $data);
            }
        }
        foreach ($slicedData as $key => $data) {
            if ($data->featured == '1') {
                array_push($datas, $data);
            }
        }
        foreach ($slicedData as $key => $data) {
            if ($data->featured == '0' and $data->hot == '0' and $data->superhot == '0') {
                array_push($datas, $data);
            }
        }

    @endphp

  
        @foreach ($datas as $property)
            {{-- Display Super Hot --}}
            @if ($property->superhot == '1')
                @include('pages.properties.partials.superhot')
            @endif
            {{-- Display  Hot --}}
            @if ($property->hot == '1')
                @include('pages.properties.partials.hot')
            @endif
            {{-- Display  Featured --}}
            @if ($property->featured == '1')
                @include('pages.properties.partials.featured')
            @endif
            {{-- Display  Normal --}}
            @if ($property->featured == '0' and $property->hot == '0' and $property->superhot == '0')
                @include('pages.properties.partials.normal')
            @endif
        @endforeach

    



            
                



                    <div class="d-flex flex-row justify-content-between px-3 pb-3">
                        {{-- <a href="#" class="btn-next">Previous</a>
          <a href="#" class="btn-pre">Next</a> --}}
                        {{ $slicedData->links() }}
                    </div>
                    <!-- footer-section -->
                
                </div>
            </div>
        </div>
    </div>
</section>
</div>

@include('frontend.partials.models')