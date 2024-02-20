<?php   
    namespace App\Repositories;
    
    interface PaginationInterface
    {
        //@return stdClass[]
        public function items(): array;
    }