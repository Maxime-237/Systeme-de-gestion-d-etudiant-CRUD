@if ($paginator->hasPages())

    <nav>
        <ul class="pagination justify-content-center">
            {{-- previous page Link --}}
            @if ($paginator->onFirstPage())

                <li class="page-item disabled"><span class="page-link bg-dark text-white border-secondary"><<</span></li>

            @else
                <li class="page-item">
                    <a href="{{ $paginator->previousPageUrl() }}" class="page-link bg-dark text-white border-secondary" rel="prev"><<</a>
                </li>
            @endif

            {{-- pagination Elements --}}

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled"><span class="page-link bg-dark text-while border-secondary">{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())

                            <li class="page-item active"><span class="page-link bg-primary border-primary">{{ $page }}</span></li>
                        @else
                            <li class="page-item">
                                <a href="{{ $url }}" class="page-link bg-dark text-white border-secondary">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif

            @endforeach

            {{-- Next page link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a href="{{ $paginator->nextPageUrl() }}" class="page-link bg-dark text-white border-secondary">>></a>
                </li>
            @else
                <li class="page-item disabled"><span class="page-link bg-dark text-white border-secondary">>></span></li>
            @endif
        </ul>
    </nav>

@endif
