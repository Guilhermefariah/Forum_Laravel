<?php
    namespace App\Repositories;

    use stdClass;

    interface SupportRepositoryInterface
    {
        public function getAll(string $filter = null): array;
        public function findOne(string $id): stdClass | null;
        public function delete(string $id): void;
    }