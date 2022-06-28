<x-course>
    <x-slot name='title'>
        Programmes
    </x-slot>
    <x-slot name='message'>
        Choose a programe !
    </x-slot>
    @foreach ($firstThree as $programme)
        <div class="col-md-4">
            <x-courses.card :title='$programme->name' style="height: 500px" class='bg-dark text-light'>
                <p>Let's go through some {{ $programme->name }} Courses</p>

                <x-slot name='extra'>
                    <a class="btn btn-outline-light mx-auto px-2  py-3 mb-5" role="button" href="{{ route('subjects', ['programme'=>$programme->slug]) }}">Show Subjects</a>
                </x-slot>
            </x-courses.card>
        </div>
    @endforeach
    @foreach ($theRest as $programme)
    <div class="col-md-3">
        <x-courses.card :title='$programme->name' style="height: 500px" class='bg-dark text-light'>
            <p>Let's go through some {{ $programme->name }} Courses</p>

            <x-slot name='extra'>
                <a class="btn btn-outline-light mx-auto px-2  py-3 mb-5" role="button" href="{{ route('subjects', ['programme'=>$programme->slug]) }}">Show Subjects</a>
            </x-slot>
        </x-courses.card>
    </div>
@endforeach
</x-course>
