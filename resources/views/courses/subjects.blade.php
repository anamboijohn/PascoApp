<x-course>
    <x-slot name='title'>
        Subjects
    </x-slot>
    <x-slot name='message'>
        Choose a Subject!
    </x-slot>
    @foreach ($subjects as $subject)
        <div class="col-md-4">
            <x-courses.card :title='$subject->name' style="height: 40vh" class='bg-dark text-light'>
                <p>Let's go through some {{ $subject->name }} Courses</p>

                <x-slot name='extra'>
                    <a class="btn btn-outline-light mx-auto px-2  py-3 mb-5" role="button" href="{{ route('pascos', ['subject'=>$subject->slug]) }}">Solve Pascos</a>
                </x-slot>
            </x-courses.card>
        </div>
    @endforeach
</x-course>
