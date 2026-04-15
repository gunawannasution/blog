{{-- partial form reusable praktik di real project --}}
@csrf
@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <p style="color:red">{{ $error }}</p>
        @endforeach
    </div>
@endif
<div>
    <label>Title</label>
    <input type="text" name="title" value="{{ old('title', $post->title ?? '') }}">
</div>

<div>
    <label>Content</label>
    <textarea name="content">{{ old('content', $post->content ?? '') }}</textarea>
</div>

<div>
    <label>Excerpt</label>
    <input type="text" name="excerpt" value="{{ old('excerpt', $post->excerpt ?? '') }}">
</div>

<div>
    <label>Meta Title</label>
    <input type="text" name="meta_title" value="{{ old('meta_title', $post->meta_title ?? '') }}">
</div>

<div>
    <label>Meta Description</label>
    <textarea name="meta_description">{{ old('meta_description', $post->meta_description ?? '') }}</textarea>
</div>

<div>
    <label>
        <input type="checkbox" name="is_published" value="1"
            {{ old('is_published', $post->is_published ?? false) ? 'checked' : '' }}>
        Publish
    </label>
</div>

<button type="submit">Simpan</button>
