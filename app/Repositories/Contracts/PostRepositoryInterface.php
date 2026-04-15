<?php
namespace App\Repositories\Contracts;
use App\Models\Post;

interface PostRepositoryInterface
{
    public function paginatePublished(int $limit = 10);
    public function findBySlug(string $slug): ?Post;
    public function create(array $data): Post;
    public function update(Post $post, array $data): Post;
    public function delete(Post $post): bool;
}
