@php
$propertyTitle = $property->title;
$propertyLink = route('property.show', [$property->slug, $property->random_id]);
$agentnumber = $property->user->phone_number;
$whatsappMessage = 'Check out this property: ' . urlencode($propertyTitle) . ' ' .
urlencode($propertyLink);
$whatsappLink = 'https://api.whatsapp.com/send?phone=' . $agentnumber . '&text=' .
$whatsappMessage;
@endphp
<li class="prop-card-child normal">
    <div class="image-wrapper position-relative">
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

         
          <div class="top-data d-flex flex-row justify-content-end">
            <label class="titanium">Titanium</label>
          </div>
          <div class="bottom-data d-flex flex-row justify-content-between align-items-center">
            <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
              <span class="view-count-white">11</span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="white-svg">
                <path fill="none" d="M0 0h16v16H0z"></path>
                <g fill="#fff" data-name="Icon ionic-ios-camera">
                  <path d="M9.8 8.24a2.08 2.08 0 1 1-2.08-2.09 2.08 2.08 0 0 1 2.08 2.1z"></path>
                  <path
                    d="M13.57 4.06H11.6a.59.59 0 0 1-.44-.2c-1.03-1.15-1.4-1.54-1.83-1.54h-3.1c-.43 0-.84.4-1.88 1.55a.58.58 0 0 1-.43.2h-.14v-.3a.3.3 0 0 0-.29-.29h-.94c-.16 0-.3.13-.3.58H2A1.18 1.18 0 0 0 .77 5.18v6.37a1.25 1.25 0 0 0 1.21 1.2h11.6a1.16 1.16 0 0 0 1.1-1.2V5.17a1.08 1.08 0 0 0-1.1-1.1zm-5.7 7.26a3.1 3.1 0 1 1 2.95-2.95 3.1 3.1 0 0 1-2.95 2.95zm3.33-5.16a.47.47 0 1 1 .47-.47.47.47 0 0 1-.47.47z">
                  </path>
                </g>
              </svg>
            </div>
            <div class="bg-light-black d-flex flex-row gap-1 align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 9 13"
                style="width: 0.9rem; height: 0.8rem">
                <path fill="#FFF"
                  d="M4.5 0C2 0 0 2 0 4.4 0 7.8 4.5 13 4.5 13S9 7.8 9 4.4C9 2 7 0 4.5 0zm0 6.3c-1.1 0-1.9-.9-1.9-1.9a2 2 0 0 1 1.9-1.9c1.1 0 1.9.8 1.9 1.9 0 1-.8 1.9-1.9 1.9z">
                </path>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="white-svg" viewBox="0 0 13 12"
                style="width: 0.9rem; height: 1.2rem">
                <path fill="#FFF"
                  d="M9.7 2V0L13 3.3 9.7 6.6V4.3c-3.9.5-5.8 4.8-5.8 4.8 0-3.6 2.5-6.7 5.8-7.1zm1.2 9.2H.8V2.5H7a12 12 0 0 1 2-.8H.4c-.2 0-.4.2-.4.4v9.5c0 .3.2.4.4.4h10.9c.2 0 .4-.2.4-.4V5.2l-.8.8v5.2z">
                </path>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" overflow="visible" viewBox="0 0 20 18.4" class="white-svg"
                style="width: 0.9rem; height: 0.8rem">
                <path
                  d="M10 18.4L8.6 17C3.4 12.4 0 9.3 0 5.5A5.5 5.5 0 0 1 5.5 0 6 6 0 0 1 10 2a6 6 0 0 1 4.5-2A5.5 5.5 0 0 1 20 5.5c0 3.8-3.4 6.9-8.6 11.5z">
                </path>
              </svg>
            </div>
          </div>
        </div>
        <div class="card-body-custom">
          <div class="d-flex flex-row justify-content-between gap-2">
            <span class="prop-count">Added: 33 minutes ago</span>
            <div class="d-flex flex-row gap-1 align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-label="Trusted badge"
                style="width: 1rem; height: 1rem">
                <g fill="#34A048">
                  <path
                    d="M25.3 16.8V6.5l-5-1.3-4.1-1h-.3l-4 1c-1.8.3-3.5.8-5.3 1.2V17c-.1 2.1.7 4.2 2 5.8 2 2.3 4.5 4.1 7.2 5.2 2.5-1 4.7-2.5 6.6-4.4 2-1.7 3-4.2 2.9-6.7zm-3.2-4.4l-2.5 3.2-4 5.2c-.8 1-1.3 1-2.1 0L9.9 16a1 1 0 0 1 0-1.5c.4-.4 1.1-.3 1.5.1l2.6 2.3.6.5.3-.5 5.6-5.5.7-.5c.4 0 .9.1 1.1.5.1.2.1.7-.2 1.1z">
                  </path>
                  <path
                    d="M29.1 16.8V5a2 2 0 0 0-1.7-2.2l-6-1.5L16.8.1h-1.7l-4.5 1.1-6.1 1.5C3.5 3 2.7 4 2.8 5v11.9c-.1 3 1 6 2.9 8.2a25 25 0 0 0 9.3 6.7l.9.2c.3 0 .7 0 1-.2a24 24 0 0 0 8.4-5.7c2.6-2.3 4-5.7 3.8-9.2zm-4.8 8.5c-2.3 2.3-5 4.1-7.9 5.3-.2.1-.5.1-.8 0a22 22 0 0 1-8.8-6.3c-1.8-2-2.7-4.7-2.6-7.4V5c0-.5.1-.8.6-.9l10.6-2.6h1C20 2.4 23.5 3.2 27 4c.5.1.6.4.6.8v11.8c.3 3.4-1 6.5-3.3 8.7z">
                  </path>
                </g>
              </svg>
            </div>
          </div>
          <div class="d-flex flex-column gap-1 my-3">
            <p class="prop-price-text"><span>PKR</span> 1.48 Crore</p>
            <p class="prop-price-text line-clamp-one">
              Park View City, Lahore
            </p>
          </div>
          <div class="d-flex flex-row gap-2">
            <div class="d-flex flex-row gap-1 align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-custom">
                <g fill="none">
                  <path d="M0 0h24v24H0z"></path>
                  <g data-name="Icon awesome-bed">
                    <path
                      d="M8.4 11.8a2 2 0 1 0-2-2 2 2 0 0 0 2 2zm8.8-3.2h-5.6a.4.4 0 0 0-.4.4v3.6H5.6V7.4a.4.4 0 0 0-.4-.4h-.8a.4.4 0 0 0-.4.4v8.8a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4V15h12.8v1.2a.4.4 0 0 0 .4.4h.8a.4.4 0 0 0 .4-.4v-4.8a2.8 2.8 0 0 0-2.8-2.8z">
                    </path>
                    <path fill="#000"
                      d="M13.2 10.6V13H18v-1.6a.8.8 0 0 0-.8-.8h-4M4.4 7h.8c.22 0 .4.18.4.4v5.2h5.6V9c0-.22.18-.4.4-.4h5.6a2.8 2.8 0 0 1 2.8 2.8v4.8a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V15H5.6v1.2a.4.4 0 0 1-.4.4h-.8a.4.4 0 0 1-.4-.4V7.4c0-.22.18-.4.4-.4zm4 .8a2 2 0 1 1 0 4 2 2 0 0 1 0-4z">
                    </path>
                  </g>
                </g>
              </svg>
              <span class="font-weight-500">3</span>
            </div>
            <div class="d-flex flex-row gap-1 align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-custom">
                <g fill="none">
                  <g data-name="Icon awesome-bath">
                    <path
                      d="M19.25 12H6.5V7.5a1 1 0 0 1 1.84-.54 2.12 2.12 0 0 0 .22 2.6.38.38 0 0 0 0 .5l.37.37a.38.38 0 0 0 .53 0l2.97-2.98a.38.38 0 0 0 0-.52l-.36-.36a.38.38 0 0 0-.5-.01 2.12 2.12 0 0 0-2.02-.48A2.5 2.5 0 0 0 5 7.5V12h-.25a.75.75 0 0 0-.75.75v.5a.75.75 0 0 0 .75.75H5v1a3 3 0 0 0 1 2.24v1a.75.75 0 0 0 .75.76h.5a.75.75 0 0 0 .75-.75V18h8v.25a.75.75 0 0 0 .75.75h.5a.75.75 0 0 0 .75-.75v-1.01A3 3 0 0 0 19 15v-1h.25a.75.75 0 0 0 .75-.75v-.5a.75.75 0 0 0-.75-.75z">
                    </path>
                    <path fill="#000"
                      d="M7 14v1c0 .4.2.63.33.75l.29.25h8.76l.3-.25A1 1 0 0 0 17 15v-1H7m.5-9c.85 0 1.6.43 2.05 1.08a2.12 2.12 0 0 1 2 .48.37.37 0 0 1 .52 0l.36.37c.14.14.14.38 0 .53l-2.97 2.97a.38.38 0 0 1-.53 0l-.36-.36a.37.37 0 0 1 0-.5 2.12 2.12 0 0 1-.23-2.6 1 1 0 0 0-1.84.54v4.5h12.75c.4 0 .75.34.75.75v.5c0 .41-.34.75-.75.75H19v1a3 3 0 0 1-1 2.24v1c0 .42-.34.76-.75.76h-.5a.75.75 0 0 1-.75-.75v-.25H8v.25c0 .41-.34.75-.75.75h-.5a.75.75 0 0 1-.75-.76v-1.01A3 3 0 0 1 5 15v-1h-.25a.75.75 0 0 1-.75-.75v-.5c0-.4.34-.75.75-.75H5V7.5A2.5 2.5 0 0 1 7.5 5z">
                    </path>
                  </g>
                  <path d="M0 0h24v24H0z"></path>
                </g>
              </svg>
              <span class="font-weight-500">4</span>
            </div>
            <div class="d-flex flex-row gap-1 align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-custom">
                <path
                  d="M10.4 16.83L9.53 16 8.1 17.4 8 6.57l1.5 1.56.9-.95L7.23 4l-3.2 3.17.9.95 1.5-1.56.12 10.85-1.6-1.51-.92.93L7.22 20zm8.8 2.37a.8.8 0 0 0 .8-.8V5.6a.8.8 0 0 0-.8-.8h-4.8a.8.8 0 0 0-.8.8v12.8a.8.8 0 0 0 .8.8zm-.8-1.6h-3.2V16h1.6v-1.6h-1.6v-1.6h1.6v-1.6h-1.6V9.6h1.6V8h-1.6V6.4h3.2z">
                </path>
              </svg>
              <span class="font-weight-500">Marla</span>
            </div>
          </div>
          <div class="mt-2">
            <p class="prop-price-text line-clamp-one font-weight-400 font-size-14 detial-text-top">
              Park View City, Lahore
            </p>
            <div class="detail-text flex-row align-items-center">
              <div class="cf36e19e">
                <span class="b779b320">Lake City Lahore Covered over an a</span>
              </div>
              ...<a href="#" class="_6e9f9ae0 d-inline-block">more</a>
            </div>
          </div>
          <div class="d-flex justify-content-between gap-1">
            <div class="card-btns d-flex flex-row gap-2 align-items-end mt-1">
                
                <button
                onclick="emailwithagent('{{ $property->random_id }}','{{ $property->title }}','{{ $property->user->phone_number }}','{{ $property->user->mobile_number }}','{{ $property->user->name }}','{{ $property->user->username }}','{{ $property->agent_id }}','{{ $property->id }}')"
                class="_85d9f2e2 a8197536 a8375d37 send-email" aria-label="Send email"
                data-bs-toggle="modal" data-bs-target="#modalabcd"
                style="background-color: #041E42;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="e6b01fef">
                    <path fill="#6CACE3"
                        d="M28.7 5.3H3.3A3.3 3.3 0 0 0 0 8.6v14.8c0 1.8 1.4 3.3 3.3 3.3h25.4c1.8 0 3.3-1.4 3.3-3.3V8.7c0-1.9-1.4-3.3-3.3-3.4zm-17 12l-8 6.6c-.3.1-.6.1-1-.2-.2-.3 0-.7.2-1l8-6.6c.3-.3.7-.1 1 .1.2.4.1.8-.2 1zm17.5 6.4c-.3.2-.6.3-1 0l-8-6.6c-.2-.1-.2-.5 0-.8 0-.3.6-.3.8 0l8 6.6c.4.1.4.5.2.8zm0-14.5l-11 7.5c-.6.4-1.4.6-2 .7-.9 0-1.6-.3-2.2-.7L3 9.2c-.4-.2-.4-.6-.2-.9.2-.3.6-.4 1-.2l10.8 7.5c.8.5 1.9.5 2.7 0l11-7.5c.2-.3.6-.1.8 0 .3.4.3.8 0 1z">
                    </path>
                </svg>
            </button>
<a class="email-msg-btn" href="{{ $whatsappLink }}">
    <svg xmlns="http://www.w3.org/2000/svg" data-name="Group 5" viewBox="0 0 20 20"
        style="height: 1.3rem; width: 1.3rem">
        <path fill="none" d="M0 0h20v20H0z"></path>
        <path fill="#041E42"
            d="M10 3.6a6.4 6.4 0 0 0-5.18 10.15l-.8 2.38 2.46-.79A6.4 6.4 0 1 0 10 3.6z"></path>
        <path fill="#fafafa"
            d="M13.83 12.72a1.86 1.86 0 0 1-1.3.93c-.34.08-.79.13-2.3-.5a8.26 8.26 0 0 1-3.27-2.9 3.79 3.79 0 0 1-.78-2 2.12 2.12 0 0 1 .67-1.61.95.95 0 0 1 .67-.24h.22c.2.02.3.03.42.34l.6 1.43a.4.4 0 0 1 .02.35 1.14 1.14 0 0 1-.21.3c-.1.12-.2.2-.29.32-.09.1-.19.22-.08.42a5.87 5.87 0 0 0 1.07 1.33 4.83 4.83 0 0 0 1.54.96.41.41 0 0 0 .47-.08 8 8 0 0 0 .51-.68.37.37 0 0 1 .47-.15c.18.07 1.12.53 1.32.63s.32.14.36.23a1.66 1.66 0 0 1-.11.92z">
        </path>
    </svg>
</a>

<button
    onclick="callwithagent('{{ $property->random_id }}','{{ $property->title }}','{{ $property->user->phone_number }}','{{ $property->user->mobile_number }}','{{ $property->user->name }}','{{ $property->user->username }}')"
    class="_5b77d672 da62f2ae _8d1154ff call btn" type="button" aria-label="Call"
    data-bs-toggle="modal" data-bs-target="#callexampleModal"
    style="background-color: #041E42; color: white;">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#fff"
        class="_40c10793" aria-label="Send email">
        <path
            d="M13.3 10.3A7.6 7.6 0 0 1 11 10a.7.7 0 0 0-.7.1l-1 1.4a10.1 10.1 0 0 1-4.6-4.6L6 5.7A.7.7 0 0 0 6 5a7.4 7.4 0 0 1-.3-2.3A.7.7 0 0 0 5 2H2.8c-.4 0-.8.2-.8.7A11.4 11.4 0 0 0 13.3 14a.7.7 0 0 0 .7-.8V11a.7.7 0 0 0-.7-.6z">
        </path>
    </svg>&nbsp;CALL
</button>
</div>
            <div class="hover-prop">
              <img src="assets/images/real-estate-small.jpg" class="before-hover" />
              <div class="after-hover">
                <div class="d-flex flex-column gap-1">
                  <img src="assets/images/real-estate-small.jpg" class="before-hover" />
                  <span class="muted-text">Registerd Since : 2023</span>
                  <p class="font-weight-500 line-clamp-one">
                    2024 Propeties for sale
                  </p>
                  <p class="font-weight-500 line-clamp-one">
                    0 Propeties for Rent
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>








          