<x-layout>
    <h1>FAQ</h1>
    <ul class="accordion">
        @foreach($faqs as $faq)
            <li>
                <input type="radio" name="accordion" id="faq{{ $faq->id }}">
                <label for="faq{{ $faq->id }}">{{ $faq->question }}</label>
                <div class="faq-content">
                    <p>{{ $faq->answer }}</p>
                </div>
            </li>
        @endforeach
    </ul>

    @if($faqs->isEmpty())
        <p>No FAQ available.</p>
    @endif
</x-layout>
