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
                return $this->paginator->items();
            }   

            public function total(): int
            {
                return $this->paginator->total() ?? 0;
            }

            public function isFirstPage(): bool
            {
                return $this->paginator->orFirstPage();
            }

            public function isLastPage(): bool
            {
                return $this->paginator->currentPage() === $this->paginator->lastPage();
            }
            
            public function currentPage(): int
            {
                return $this->paginator->currentPage() ?? 1;
            }
            
            public function getNumberNextPage(): int
            {
                return $this->paginator->currentPage() + 1;
            }

            public function getNumberPreviouspage(): int
            {
                return $this->paginator->currentPage() -1;
            }
    }