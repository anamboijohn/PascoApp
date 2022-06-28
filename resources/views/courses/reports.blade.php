<x-course>

    <x-slot name='title'>
        Hear are you Records
    </x-slot>
    <x-slot name='message'>
            <a class="btn btn-success btn-sm "
            href={{ route('downloadPDF', ['user'=>Auth::user()->id]) }} role="button">Download
            Results</a>
    </x-slot>

    <table class="table table-dark table-striped-columns table-hover ">
        <thead>
            <tr>
                <th scope="col">S/N</th>
                <th scope="col">Date</th>
                <th scope="col">Pasco</th>
                <th scope="col">Total Number of Questions</th>
                <th scope="col">Number of Questions Attempted</th>
                <th scope="col">Score</th>
                <th scope="col">Grade</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
            @php
                $pasco = $record->pasco;
            @endphp
                <tr>
                    <th scope="row"> {{ $record->id }} </th>
                    <td>{{ $record->created_at->diffForHumans() }}</td>
                    <td>{{ $pasco->subject->name . ' ' . $pasco->year . ' ' . $pasco->type }}</td>
                    <td>{{ $record->total_no_questions }}</td>
                    <td>{{ $record->no_of_questions_answered }}</td>
                    <td>{{ $record->score }}</td>
                    <td>{{ $record->grade }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-course>
