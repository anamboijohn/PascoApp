<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('dist/js/bootstrap.min.js') }}" defer></script>

    <title>downloadResults</title>

</head>

<body>
    <center>Congratulations Here are your Results Record</center>
    <center><h1>Downloaded on {{  date('d') . ' day of '. date('M Y') }}</h1></center>
    <table class="table table-dark table-striped-columns table-hover ">
        <thead style="border: solid 1px black">
            <tr style="border-left: solid 1px black">
                <th scope="col"style="border-right: solid 1px black; background: #00000073; color:#fff">S/N</th>
                <th scope="col"style="border-right: solid 1px black; background: #fff; color:black">Date</th>
                <th scope="col"style="border-right: solid 1px black; background:  #00000073; color:#fff">Pasco</th>
                <th scope="col"style="border-right: solid 1px black; background: #fff; color:black">Total Number of Questions</th>
                <th scope="col"style="border-right: solid 1px black; background:  #00000073; color:#fff">Number of Questions Attempted</th>
                <th scope="col"style="border-right: solid 1px black; background: #fff; color:black">Score</th>
                <th scope="col"style="border-right: solid 1px black; background:  #00000073; color:#fff">Grade</th>
            </tr>
        </thead>
        <tbody style="border: solid 1px black">
            @foreach ($records as $record)
            @php
                $pasco = $record->pasco;
            @endphp
                <tr style="border-left: solid 1px black">
                    <th scope="row" style="background:  #00000073; color:#fff"> {{ $record->id }} </th>
                    <td style="border-right: solid 1px black; background: #fff; color:black">{{ $record->created_at->diffForHumans()}}</td>
                    <td style="border-right: solid 1px black; background:  #00000073; color:#fff">{{ $pasco->subject->name . ' ' . $pasco->year . ' ' . $pasco->type }}</td>
                    <td style="border-right: solid 1px black; background: #fff; color:black">{{ $record->total_no_questions }}</td>
                    <td style="border-right: solid 1px black; background:  #00000073; color:#fff">{{ $record->no_of_questions_answered }}</td>
                    <td style="border-right: solid 1px black; background: #fff; color:black">{{ $record->score }}</td>
                    <td style="border-right: solid 1px black; background:  #00000073; color:#fff">{{ $record->grade }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
