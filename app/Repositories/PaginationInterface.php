<?php   
    namespace App\Repositories;
    
    interface PaginationInterface
    {
        //@return stdClass[]
        public function items(): array;
        public function total(): int;
        public function isFirstPage(): bool;
    }