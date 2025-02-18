<x-layout>
    <section>
        <div class="blog-container">
            <article class="blog-post">
                <h1>{{ $post->title }}</h1>
                <p class="date">{{ $post->created_at->format('F d, Y') }}</p>
                <p>{{ $post->content }}</p>
            </article>
            <a href="{{ route('blog') }}">← Back to Blog</a>
        </div>
    </section>
</x-layout>
