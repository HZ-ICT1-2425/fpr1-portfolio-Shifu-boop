<x-layout>
    <h1>FAQ</h1>

    <!-- Add FAQ Form -->
    <form action="/faq" method="POST">
        @csrf
        <input type="text" name="question" placeholder="Enter question" required>
        <textarea name="answer" placeholder="Enter answer" required></textarea>
        <button type="submit">Add FAQ</button>
    </form>


    <ul class="accordion">
        @foreach($faqs as $faq)
            <li>
                <input type="radio" name="accordion" id="faq{{ $faq->id }}">
                <label for="faq{{ $faq->id }}">{{ $faq->question }}</label>
                <div class="faq-content">
                    <p>{{ $faq->answer }}</p>


                    <form action="/faq/{{ $faq->id }}" method="POST">
                        @csrf @method('PUT')
                        <input type="text" name="question" value="{{ $faq->question }}" required>
                        <textarea name="answer" required>{{ $faq->answer }}</textarea>
                        <button type="submit">Update</button>
                    </form>


                    <form action="/faq/{{ $faq->id }}" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

    @if($faqs->isEmpty())
        <p>No FAQ available.</p>
    @endif
</x-layout>
