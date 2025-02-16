<x-layout>
    <h1>Create a New Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" required>

        <label>Slug (URL Identifier):</label>
        <input type="text" name="slug" required>

        <label>Content:</label>
        <textarea name="content" rows="5" required></textarea>

        <button type="submit">Create Post</button>
    </form>
    <a href="{{ route('blog') }}">← Back to Blog</a>
</x-layout>
