<?php

namespace App\Services;

use App\Repositories\Contracts\PostRepositoryInterface;

class PostService
{
    public function __construct(private PostRepositoryInterface $postRepo) {}

    public function getHomePost()
    {
        return $this->postRepo->getPublishedPaginated(12);
    }

    public function getSinglePost(string $slug)
    {
        return $this->postRepo->findBySlug($slug);
    }

    // TAMBAHKAN INI: Untuk keperluan Edit di Admin
    public function getSinglePostById(int $id)
    {
        return $this->postRepo->findById($id);
    }

    public function storePost(array $data)
    {
        return $this->postRepo->create($data);
    }

    public function getAllPostsForAdmin()
    {
        return $this->postRepo->getAllAdmin();
    }

    public function updatePost(int $id, array $data)
    {
        return $this->postRepo->update($id, $data);
    }

    public function deletePost(int $id)
    {
        return $this->postRepo->delete($id);
    }
}
