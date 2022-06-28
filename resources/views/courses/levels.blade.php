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
                <p>Let's go through some {{ $level->name }} Programmes</p>

                <x-slot name='extra'>
                    <a class="btn btn-outline-light mx-auto px-2  py-3 mb-5" role="button" href="{{ route('programmes', ['level'=>$level->slug]) }}">Show Programmes</a>
                </x-slot>
            </x-courses.card>>
        </div>
    @endforeach
</x-course>
