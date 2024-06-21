@if ($paginator->hasPages())
<div class="d-flex justify-content-center align-items-center">
    <nav aria-label="Page navigation">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <a class="page-link" style="font-size: 24px;">Previous</a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" style="font-size: 24px;">Previous</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><a class="page-link text-white" style="font-size: 12px;">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active " aria-current="page"><a class="page-link text-white" style="font-size: 12px;">{{ $page }}</a></li>
                        @else
                            <li class="page-item"><a class="page-link text-white" href="{{ $url }}" style="font-size: 12px;">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" style="font-size: 24px;">Next</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <a class="page-link" style="font-size: 24px;">Next</a>
                </li>
            @endif
        </ul>
    </nav>
</div>
@endif
