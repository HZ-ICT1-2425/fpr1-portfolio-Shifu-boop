<x-layout>
    <h1>Edit Blog Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')  <!-- Important! Laravel requires this for updating -->

        <label>Title:</label>
        <input type="text" name="title" value="{{ old('title', $post->title) }}" required>

        <label>Slug:</label>
        <input type="text" name="slug" value="{{ old('slug', $post->slug) }}" required>

        <label>Content:</label>
        <textarea name="content" required>{{ old('content', $post->content) }}</textarea>

        <button type="submit">Update Post</button>
    </form>
    <a href="{{ route('blog') }}">← Back to Blog</a>
</x-layout>
