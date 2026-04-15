{{-- app/resources/views/admin/posts/_form.blade.php --}}
@csrf

<style>
    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 0.5rem;
        color: #333;
    }

    .form-control {
        width: 100%;
        padding: 0.6rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .form-control:focus {
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
    }

    .invalid-feedback {
        color: #dc3545;
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }

    .is-invalid {
        border-color: #dc3545;
    }

    .btn-submit {
        background: #28a745;
        color: white;
        padding: 0.7rem 1.5rem;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 1rem;
    }

    .btn-submit:hover {
        background: #218838;
    }

    .card-section {
        background: #f9f9f9;
        padding: 1.5rem;
        border-radius: 8px;
        margin-bottom: 2rem;
        border: 1px solid #eee;
    }

    .section-title {
        margin-top: 0;
        margin-bottom: 1rem;
        font-size: 1.1rem;
        color: #555;
        border-bottom: 1px solid #ddd;
        padding-bottom: 0.5rem;
    }
</style>

<div class="card-section">
    <h3 class="section-title">Informasi Konten</h3>

    <div class="form-group">
        <label for="title">Judul Postingan</label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
            value="{{ old('title', $post->title ?? '') }}" placeholder="Masukkan judul menarik...">
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="content">Isi Konten</label>
        <textarea name="content" id="content" rows="8" class="form-control @error('content') is-invalid @enderror"
            placeholder="Tuliskan isi artikel di sini...">{{ old('content', $post->content ?? '') }}</textarea>
        @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="excerpt">Ringkasan (Excerpt)</label>
        <textarea name="excerpt" id="excerpt" rows="3" class="form-control @error('excerpt') is-invalid @enderror"
            placeholder="Penjelasan singkat untuk kartu blog...">{{ old('excerpt', $post->excerpt ?? '') }}</textarea>
        @error('excerpt')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="card-section" style="background: #eef2f7;">
    <h3 class="section-title">Optimasi SEO</h3>

    <div class="form-group">
        <label for="meta_title">Meta Title</label>
        <input type="text" name="meta_title" id="meta_title"
            class="form-control @error('meta_title') is-invalid @enderror"
            value="{{ old('meta_title', $post->meta_title ?? '') }}" placeholder="Title untuk Google...">
        @error('meta_title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="meta_description">Meta Description</label>
        <textarea name="meta_description" id="meta_description" rows="3"
            class="form-control @error('meta_description') is-invalid @enderror"
            placeholder="Deskripsi singkat untuk hasil pencarian...">{{ old('meta_description', $post->meta_description ?? '') }}</textarea>
        @error('meta_description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group" style="background: #fff3cd; padding: 1rem; border-radius: 4px;">
    <label style="cursor: pointer; display: flex; align-items: center;">
        <input type="checkbox" name="is_published" value="1" style="width: 20px; height: 20px; margin-right: 10px;"
            {{ old('is_published', $post->is_published ?? false) ? 'checked' : '' }}>
        <span>Publikasikan Artikel (Siap tayang)</span>
    </label>
</div>

<button type="submit" class="btn-submit">
    {{ isset($post) ? 'Update Postingan' : 'Simpan Postingan Baru' }}
</button>
