@php
$superhotDatas = [];

foreach ($slicedData as $data) {
    if ($data->superhot == '1' && !in_array($data, $superhotDatas, true)) {
        $superhotDatas[] = $data;
    }
}
@endphp


    @foreach ($superhotDatas as $property)
    @endforeach
        {{-- Display Super Hot --}}
        @include('pages.properties.partials.superhot')
    
</div>

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
