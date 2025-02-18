<x-layout>
    <section>
        <h1>Dashboard</h1>

        <!-- Progress Bar -->
        <div class="credits-bar">
            <div class="credits-progress" style="width: {{ ($totalCredits / 62.5) * 100 }}%;">
                {{ $totalCredits }}/62.5 EC
            </div>
        </div>

        <div class="study-monitor">
            <!-- Table Headers -->
            <div class="header">Quarter</div>
            <div class="header">Title</div>
            <div class="header">Test</div>
            <div class="header">Credits</div>
            <div class="header">Grade</div>
            <div class="header">Status</div>

            @foreach($courses as $course)
                <div class="cell">{{ $course->quarter }}</div>
                <div class="cell">{{ $course->title }}</div>
                <div class="cell">{{ $course->exam }}</div>
                <div class="cell">{{ $course->credits }}</div>

                <!-- Form for Updating Grade and Status -->
                <div class="cell">
                    <form action="{{ route('dashboard.update', $course->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" name ="grade" value="{{ $course->grade ?? '-' }}">
                </div>
                <div class="cell">
                    <select name="status">
                        <option value="Not-Taken" {{ $course->status == 'Not-Taken' ? 'selected' : '' }}>Not-Taken</option>
                        <option value="Taken" {{ $course->status == 'Taken' ? 'selected' : '' }}>Taken</option>
                        <option value="Passed" {{ $course->status == 'Passed' ? 'selected' : '' }}>Passed</option>
                    </select>
                    <button type="submit">Update</button>
                    </form>
                </div>
            @endforeach
        </div>
    </section>
</x-layout>
