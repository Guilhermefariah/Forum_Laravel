<?php
    namespace App\Repositories;

    interface SupportRepositoryInterface
    {
        public function getAll(string $filter = null): array;
    }