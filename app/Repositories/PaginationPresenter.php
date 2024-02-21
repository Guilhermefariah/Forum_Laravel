<?php
    namespace App\Repositories;
    use Illuminate\Pagination\LengthAwarePaginator;

    class PaginationPresenter implements PaginationInterface
    {
            public function __construct(
                protected LengthAwarePaginator $paginator
            ){}
            //@return stdClass[]
            public function items(): array
            {

            }

            public function total(): int
            {
                return $this->paginator->total() ?? 0;
            }

            public function isFirstPage(): bool
            {

            }

            public function isLastPage(): bool
            {

            }
            
            public function currentPage(): int
            {
                return $this->paginator->currentPage() ?? 1;
            }
            
            public function getNumberNextPage(): int
            {

            }

            public function getNumberPreviouspage(): int
            {

            }
    }