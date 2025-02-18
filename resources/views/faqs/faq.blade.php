<x-layout>
    <div class="faq-container">
        <h1>FAQ</h1>


        <form action="/faq" method="POST" class="faq-form">
            @csrf
            <div class="form-group">
                <input type="text" name="question" placeholder="Enter question" required>
            </div>
            <div class="form-group">
                <textarea class="faq-text" name="answer" placeholder="Enter answer" required></textarea>
            </div>
            <button type="submit" class="btn-submit">Add FAQ</button>
        </form>

        <ul class="accordion">
            @foreach($faqs as $faq)
                <li>
                    <input type="radio" name="accordion" id="faq{{ $faq->id }}">
                    <label for="faq{{ $faq->id }}">{{ $faq->question }}</label>
                    <div class="faq-content">
                        <p>{{ $faq->answer }}</p>


                        <form action="/faq/{{ $faq->id }}" method="POST" class="faq-edit-form">
                            @csrf @method('PUT')
                            <div class="form-group">
                                <input type="text" name="question" value="{{ $faq->question }}" required>
                            </div>
                            <div class="form-group">
                                <textarea name="answer" required>{{ $faq->answer }}</textarea>
                            </div>
                            <button type="submit" class="btn-update">Update</button>
                        </form>


                        <form action="/faq/{{ $faq->id }}" method="POST" class="faq-delete-form">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('Are you sure you want to delete this FAQ?')">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>

        @if($faqs->isEmpty())
            <p class="no-faq">No FAQ available.</p>
        @endif
    </div>
</x-layout>
