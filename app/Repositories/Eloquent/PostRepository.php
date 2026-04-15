<?php
namespace App\Repositories\Eloquent;
use App\Models\Post;
use App\Repositories\Contracts\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    public function paginatePublished(int $limit = 10)
    {
        return Post::where('is_published', true)->latest('published_at')->paginate($limit);
    }

    public function findBySlug(string $slug): ?Post
    {
        // Gunakan first() agar mengembalikan null jika tidak ada, bukan error.
        return Post::where('slug', $slug)->first();
    }

    public function create(array $data): Post
    {
        return Post::create($data);
    }

    public function update(Post $post, array $data): Post
    {
        $post->update($data);
        return $post;
    }

    public function delete(Post $post): bool
    {
        return $post->delete();
    }
}
