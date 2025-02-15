<x-layout>
    <section>
        <div class="blog-container">
            <h1>Blog</h1>
            @foreach($posts as $post)
                <article class="blog-post">
                    <h2>{{ $post->title }}</h2>
                    <p class="date">{{ $post->created_at->format('F d, Y') }}</p>
                    <p>{{ Str::limit($post->content, 100) }}</p>
                    <a href="{{ route('post.show', $post->slug) }}" class="{{ request()->routeIs('post.show', $post->slug) ? 'is-active' : '' }}">Read more</a>
                </article>
            @endforeach

            @if($posts->isEmpty())
                <p>No blog posts</p>
            @endif
        </div>
    </section>
</x-layout>
