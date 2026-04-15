<?php
namespace App\Services;
use App\Models\Post;
use App\Repositories\Contracts\PostRepositoryInterface;
use Illuminate\Support\Str;

class PostService
{
    public function __construct(protected PostRepositoryInterface $repo)
    {

    }

    public function list()
    {
        return $this->repo->paginatePublished();
    }

    public function detail(string $slug)
    {
        return $this->repo->findBySlug($slug);
    }

    public function create(array $data)
    {
        $data['slug']=Str::slug($data['title']);

        if(!empty($data['is_published']))
            {
                $data['published_at']=now();
            }
            return $this->repo->create($data);
    }

    public function update(Post $post, array $data)
    {
        if (isset($data['title'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        return $this->repo->update($post, $data);
    }

    public function delete(Post $post)
    {
        return $this->repo->delete($post);
    }

}
