<h1>Edit Post</h1>

<form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
    @method('PUT')

    @include('admin.posts._form')
</form>

<a href="{{ route('admin.posts.index') }}">Kembali</a>
