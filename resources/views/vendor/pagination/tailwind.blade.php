@if ($paginator->hasPages())
<div class="col-md-2 mt-5">
    <select id="numberOfPerPage" onchange="numberOfPerPageHandler()" class="custom-select custom-select-sm form-control form-control-sm form-select form-select-sm">
                @if (request()->get('value'))
                    <option value="{{ request()->get('value') }}">{{ request()->get('value') }}</option>
                @endif
                @switch(request()->get('value'))
                    @case(10)
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        @break
                    @case(25)
                        <option value="10">10</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        @break
                    @case(50)
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="100">100</option>
                        @break
                    @case(100)
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        @break
                    @default
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                @endswitch
    </select> 
</div>
    <div class="col-md-10">
        <nav class="mt-5">
            <ul class="pagination justify-content-center">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                        <span class="page-link" aria-hidden="true">&lsaquo;</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                    </li>
                @else
                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                        <span class="page-link" aria-hidden="true">&rsaquo;</span>
                    </li>
                @endif
            </ul>
        </nav>
    </div>

@endif


