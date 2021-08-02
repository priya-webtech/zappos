<div>
    @if ($paginator->hasPages())

        <nav>
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link"><button class="secondary icon-prev"></button></span>
                    </li>
                @else
                    <li class="page-item">
                        <button type="button" class="page-link secondary icon-prev" wire:click="previousPage" wire:loading.attr="disabled" rel="prev"></button>
                    </li>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <button type="button" class="page-link secondary icon-next" wire:click="nextPage" wire:loading.attr="disabled" rel="next"></button>
                    </li>
                @else
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link"><button class="secondary icon-next"></button></span>
                    </li>
                @endif
            </ul>
        </nav>
    @endif
</div>





