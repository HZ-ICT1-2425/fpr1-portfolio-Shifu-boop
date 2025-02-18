<x-layout>
    <div class="form-container">
        <h1>Create a New Post</h1>

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="slug">Slug (URL Identifier):</label>
                <input type="text" id="slug" name="slug" required>
            </div>

            <div class="form-group">
                <label for="content">Content:</label>
                <textarea id="content" name="content" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn-submit">Create Post</button>
        </form>

        <a href="{{ route('blog') }}" class="back-link">← Back to Blog</a>
    </div>
</x-layout>
