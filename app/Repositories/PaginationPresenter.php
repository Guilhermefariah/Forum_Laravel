<?php
    namespace App\Repositories;
    use Illuminate\Pagination\LengthAwarePaginator;
use stdClass;

    class PaginationPresenter implements PaginationInterface
    {       
            /*
               @var stdClass[]
            */
            private array $items;

            public function __construct(
                protected LengthAwarePaginator $paginator
            )
            {
                $this->items = $this->resolveItems($this->paginator->items());
            }
            //@return stdClass[]
            public function items(): array
            {
                return $this->items;
                //return $this->paginator->items();
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
            
            private function resolveItems(array $items): array
            {
                $response = [];
                foreach ($items as  $item) {
                    $stdClassObject = new stdClass;
          
                }
                return $response;   
            }
    }