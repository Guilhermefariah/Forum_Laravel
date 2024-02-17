<?php 
    namespace App\Services;

    class SupportService
    {
        protected $repository;

        public function __construct()
        {
            
        }
        
        public function getAll(string $filter = null): array
        {
            return $this->repository->getAll($filter);
        }
    }