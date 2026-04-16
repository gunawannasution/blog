<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\PostService;
use App\Models\Post; // Tambahkan ini jika perlu type-hinting
use App\Requests\StorePostRequest;

class AdminPostController extends Controller
{
    public function __construct(protected PostService $postService){}

    public function index()
    {
        $posts = $this->postService->getAllPostsForAdmin();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Menampilkan form untuk membuat post baru
     */
    public function create()
    {
        // Mengirimkan instance model kosong agar form reusable tidak error
        $post = new Post();
        return view('admin.posts.create', compact('post'));
    }

    public function store(StorePostRequest $request)
    {
        $this->postService->storePost($request->validated());
        return redirect()->route('admin.posts.index')->with('success', 'Post created!');
    }

    /**
     * Menampilkan form edit dengan data post yang ada
     */
    public function edit(int $id)
    {
        // Ambil data post melalui Service
        $post = $this->postService->getSinglePostById($id);
        return view('admin.posts.edit', compact('post'));
    }

    public function update(StorePostRequest $request, int $id)
    {
        $this->postService->updatePost($id, $request->validated());
        // Redirect ke index biasanya lebih user-friendly setelah update
        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully!');
    }

    public function destroy(int $id)
    {
        $this->postService->deletePost($id);
        return back()->with('success', 'Post moved to trash');
    }
}
