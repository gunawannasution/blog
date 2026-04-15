<?php
namespace App\Responses;

use App\Models\Post;
use Illuminate\Support\Str;

class PostResponse
{
    public static function list($posts)
    {
        // Menggunakan through untuk transformasi data paginasi
        return $posts->through(fn(Post $post) => [
            'title' => $post->title,
            'slug'  => $post->slug,
            'excerpt' => $post->excerpt ?? Str::limit(strip_tags($post->content), 150),
            'published_at' => $post->published_at?->format('d M Y'),
        ]);
    }

    public static function detail(?Post $post)
    {
        if (!$post) return null;

        return [
            'title'   => $post->title,
            'content' => $post->content,
            'meta'    => [
                'title' => $post->meta_title ?? $post->title,
                'desc'  => $post->meta_description,
            ]
        ];
    }
}
