<x-layout>
    <h1>Blog</h1>
    @foreach($posts as $post)
        <article class="blog-post">
            <h2>{{ $post->title }}</h2>
            <p class="date">{{ $post->created_at->format('F d, Y') }}</p>
            <p>{{ Str::limit($post->content, 100) }}</p>
            <a href="{{ route('posts.show', $post->slug) }}">Read more</a>
            <a href="{{ route('posts.edit', $post) }}">Edit</a>

            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </article>
    @endforeach

    @if($posts->isEmpty())
        <p>No blog posts available yet.</p>
    @endif

    <a href="{{ route('posts.create') }}">Create New Post</a>
</x-layout>
