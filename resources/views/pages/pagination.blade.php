@if ($paginator->hasPages())
    <ul class="pagination justify-content-center pagination-lg " >
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled " >
                <a class="page-link" href="#" aria-label="Previous" >
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
@else
            <li class="page-item"><a href="{{ $paginator->previousPageUrl() }}" class="page-link text-red font-weight-bolder" rel="prev">&laquo;</a></li>
@endif

{{-- Pagination Elements --}}
@foreach ($elements as $element)
{{-- "Three Dots" Separator --}}
    @if (is_string($element))
            <li class="page-item disabled">{{ $element }}</li>
    @endif

    {{-- Array Of Links --}}
    @if (is_array($element))
        @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                        <li class="page-item  ">
                            <a href="#" class="page-link bg-bom text-white font-weight-bolder">{{ $page }}<span class="sr-only">(current)</span></a>
                        </li>
                @else
                        <li class="page-item">
                            <a href="{{ $url }}" class="page-link text-h font-weight-bolder">{{ $page }}</a>
                        </li>
                @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
                <li class="page-item"><a href="{{ $paginator->nextPageUrl() }}" class="page-link text-red font-weight-bolder" rel="next">&raquo;</a></li>
        @else
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
        @endif
    </ul>
    @endif