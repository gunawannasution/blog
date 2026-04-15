<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Services\PostService;

class AdminPostController extends Controller
{
    public function __construct(
        protected PostService $service
    ) {}

    public function index(): View
    {
        $posts = $this->service->paginate();

        return view('admin.posts.index', compact('posts'));
    }

    public function create(): View
    {
        return view('admin.posts.create');
    }

    public function store(StorePostRequest $request): RedirectResponse
    {
        $this->service->create($request->validated());

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'Post berhasil dibuat');
    }

    public function edit(int $id): View
    {
        $post = $this->service->findOrFail($id);

        return view('admin.posts.edit', compact('post'));
    }

    public function update(UpdatePostRequest $request, int $id): RedirectResponse
    {
        $this->service->update($id, $request->validated());

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'Post berhasil diupdate');
    }

    public function destroy(int $id): RedirectResponse
    {
        $this->service->delete($id);

        return back()->with('success', 'Post dihapus');
    }
}
