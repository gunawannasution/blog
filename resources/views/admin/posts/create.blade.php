<h1>Buat Post</h1>

<form action="{{ route('admin.posts.store') }}" method="POST">

    @include('admin.posts._form')
</form>

<a href="{{ route('admin.posts.index') }}">Kembali</a>
