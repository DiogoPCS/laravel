@if ($paginator->hasPages())
    <nav class="pagination">
        @if ($paginator->onFirstPage())
            <span class="pagination-link disabled">&larr; Anterior</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="pagination-link">&larr; Anterior</a>
        @endif

        <span class="pagination-info">Página {{ $paginator->currentPage() }} de {{ $paginator->lastPage() }}</span>

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="pagination-link">Próxima &rarr;</a>
        @else
            <span class="pagination-link disabled">Próxima &rarr;</span>
        @endif
    </nav>
@endif
