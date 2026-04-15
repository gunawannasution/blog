<?php
namespace App\Http\Controllers;

use App\Services\PostService;
use App\Responses\PostResponse; // Ini harus merujuk ke app/Responses/PostResponse.php

class BlogController extends Controller
{
    public function __construct(protected PostService $service) {}

    public function index()
    {
        $posts = $this->service->list();
        return view('blog.index', [
            'posts' => PostResponse::list($posts)
        ]);
    }

    public function show($slug)
    {
        $data = $this->service->detail($slug);
        $post = PostResponse::detail($data);

        if (!$post) abort(404);

        return view('blog.show', compact('post'));
    }
}
