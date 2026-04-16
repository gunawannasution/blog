<?php
namespace App\Repositories\Eloquent;

use App\Models\Post;
use App\Repositories\Contracts\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    public function getPublishedPaginated(int $perPage = 10)
    {
        return Post::where('is_published',true)->latest('published_at')->paginate($perPage);
    }

    public function getAllAdmin()
    {
        return Post::withTrashed() // Menampilkan yang sudah di-softdelete juga
            ->latest()
            ->paginate(20);
    }

    public function findBySlug(string $slug)
    {
        return Post::where('slug',$slug)->where('is_published',true)->firstOrFail();
    }

    public function findById(int $id)
    {
        return Post::withTrashed()->findOrFail($id);
    }





    public function create(array $data)
    {
        return Post::create($this->prepareData($data));
    }

    public function update(int $id, array $data)
    {
        $post = $this->findById($id);
        $post->update($this->prepareData($data));
        return $post;
    }

    public function delete(int $id)
    {
        $post = $this->findById($id);
        return $post->delete();
    }

    public function restore(int $id)
    {
        return Post::onlyTrashed()->findOrFail($id)->restore();
    }

    /**
     * Helper untuk konsistensi data logic (SOLID: Don't Repeat Yourself)
     */
    protected function prepareData(array $data): array
    {
        if (isset($data['title'])) {
            $data['slug'] = str($data['title'])->slug();
        }

        if (isset($data['is_published'])) {
            $data['published_at'] = $data['is_published'] ? now() : null;
        }

        return $data;
    }
}
