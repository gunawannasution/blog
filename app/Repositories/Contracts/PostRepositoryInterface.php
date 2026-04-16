<?php

namespace App\Repositories\Contracts;

interface PostRepositoryInterface
{
    // Read
    public function getPublishedPaginated(int $perPage = 10);
    public function getAllAdmin(); // Untuk dashboard (termasuk draft & trashed)
    public function findBySlug(string $slug);
    public function findById(int $id);

    // Write
    public function create(array $data);
    public function update(int $id, array $data);
    public function delete(int $id);
    public function restore(int $id); // Opsional karena pakai SoftDeletes
}
