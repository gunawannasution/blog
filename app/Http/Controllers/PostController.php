<?php
namespace App\Http\Controllers;

use App\Services\PostService;

class PostController extends Controller
{
    public function __construct(protected PostService $postService){}

    public function index()
    {
        $posts=$this->postService->getHomePost();
        return view('blog.index',compact('posts'));
    }

    public function show($slug)
    {
        $post=$this->postService->getSinglePost($slug);
        return view('blog.show',compact('post'));
    }
}
