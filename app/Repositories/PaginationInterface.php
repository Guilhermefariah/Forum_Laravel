<?php   
    namespace App\Repositories;
    
    interface PaginationInterface
    {
        
        public function items(): array;
    }