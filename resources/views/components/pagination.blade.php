@if ($paginator->hasPages())
    <div class="pagination-rounded p-2 d-flex justify-content-end">
        <ul class="pagination m-0">
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                        <i class="fa-duotone fa-chevrons-left"></i>
                        <span>Prev</span>
                    </a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                        <i class="fa-duotone fa-chevrons-left"></i>
                        <span>Prev</span>
                    </a>
                </li>
            @endif
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled">{{ $element }}</li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active">
                                <a class="page-link">{{ $page }}</a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                        <span>Next</span>
                        <i class="fa-solid fa-chevrons-right"></i>
                    </a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span>Next</span>
                        <i class="fa-solid fa-chevrons-right"></i>
                    </a>
                </li>
            @endif
        </ul>
    </div>
@endif