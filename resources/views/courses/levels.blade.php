<x-course>
    <x-slot name='title'>
        Levels
    </x-slot>
    <x-slot name='message'>
        Which Level are you?
    </x-slot>
    @foreach ($levels as $level)
        <div class="col-md">
            <x-courses.card :title='$level->name' style="height: 500px" class='bg-dark text-light'>
                <p style="margin-bottom:10vh;">Let's go through some {{ $level->name }} Programmes</p>
                @if ($level->name === 'Junior High School')
                <p>
                    Candidates who choose this path are quizzed and exposed to bece past questions.<br>
                    This covers all aspect of reading and calculation based subjects.<br>
                </p>
                @else
                <p>
                    Candidates who choose this path are quizzed and exposed to wassce past questions.<br>
                    This covers each of the 6 courses offered in Senior High<br>
                </p>
                @endif

                <x-slot name='extra'>
                    <a class="btn btn-outline-light mx-auto px-2  py-3 mb-5" role="button" href="{{ route('programmes', ['level'=>$level->slug]) }}">Show Programmes</a>
                </x-slot>
            </x-courses.card>>
        </div>
    @endforeach
</x-course>
