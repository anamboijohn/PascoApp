<x-course>
    <x-slot name='title'>
        Pascos
    </x-slot>
    <x-slot name='message'>
        Choose a pasco to solve!
    </x-slot>
    {{-- Searh Bar -------------------------------------------------------------------------------------------}}
    <form class="d-flex mb-5" role="search">
        <x-courses.search placeholder='Search based on year or type eg1. 2015, eg2. school, eg3. novdec '/>
        <x-button class="btn btn-outline-success">
            Search
        </x-button>
    </form>

    {{-- //*************************************************************************************************************** --}}

    @foreach ($pascos as $pasco)
        <div class="col-md-4">
            <x-courses.card :title='$pasco->year ."   |   ". $pasco->type' style="height: 30vh" class='bg-dark text-light'>
                <p> Invade {{ $pasco->year  .' '. $pasco->type }} Questions</p>
                <p>{{ $subject->find($pasco->subject_id)->name}}</p>
                <x-slot name='extra'>
                    <a class="btn btn-outline-light mx-auto mt-0" role="button" href={{ route('questions', ['pasco' => $pasco->id]) }} style="position:absolute; z-index:5;top:80%; left: 25%">Go to questions</a>
                </x-slot>
            </x-courses.card>
        </div>
    @endforeach
</x-course>
