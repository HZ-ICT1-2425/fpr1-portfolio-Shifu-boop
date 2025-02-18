<x-layout>
    <h1>{{ $post->title }}</h1>
    <p class="date">{{ $post->created_at->format('F d, Y') }}</p>
    <p>{{ $post->content }}</p>
    <a href="{{ route('blog') }}">← Back to Blog</a>
</x-layout>
