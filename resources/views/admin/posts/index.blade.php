<h1>Admin Posts</h1>

@if (session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif

<a href="{{ route('admin.posts.create') }}"> + Tambah Post Baru</a>

<table border="1" cellpadding="10" style="width: 100%; margin-top: 20px; border-collapse: collapse;">
    <thead>
        <tr style="background-color: #f4f4f4;">
            <th>Judul</th>
            <th>Slug</th>
            <th>Status</th>
            <th>Tanggal Dibuat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td><code>{{ $post->slug }}</code></td>
                <td>
                    {{ $post->is_published ? '✅ Published' : 'Draft' }}
                </td>
                <td>{{ $post->created_at->format('d M Y') }}</td>
                <td>
                    <a href="{{ route('admin.posts.edit', $post->id) }}">Edit</a> |

                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" style="text-align: center;">Belum ada data postingan.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<!-- Menampilkan Navigasi Paginasi -->
<div style="margin-top: 20px;">
    {{ $posts->links() }}
</div>
