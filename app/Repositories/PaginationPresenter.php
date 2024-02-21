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
                return $this->paginator->total();
            }

            public function isFirstPage(): bool
            {

            }

            public function isLastPage(): bool
            {

            }
            
            public function currentPage(): int
            {

            }
            
            public function getNumberNextPage(): int
            {

            }

            public function getNumberPreviouspage(): int
            {

            }
    }