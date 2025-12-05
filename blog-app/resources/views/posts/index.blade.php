<h2>Daftar Post</h2>
@foreach ($posts as $post)
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->content }}</p>

    @can('update', $post)
        <a href="{{ route('posts.edit', $post) }}">Edit</a>
    @endcan

    @can('delete', $post)
        <form action="{{ route('posts.destroy', $post) }}" method="POST">
            @csrf @method('DELETE')
            <button>Delete</button>
        </form>
    @endcan
@endforeach

@auth
    <a href="{{ route('posts.create') }}">Tambah Post</a>
@endauth