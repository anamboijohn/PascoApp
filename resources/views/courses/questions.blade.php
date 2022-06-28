<x-course>
    <x-slot name='title'>
        {{ $Pasco->year . ' ' . $Pasco->type . ' WAEC' }}
    </x-slot>
    <x-slot name='message'>
        <a class="btn btn-light btn-lg " href={{ route('pascos', ['subject' => $Pasco->subject->slug]) }}
            role="button">
            <i class="fa fa-backward" aria-hidden="true"></i>
        </a>
        <p>Let's Start Whoaw!</p>
    </x-slot>
    <div class="container" style="background: #f2f1ef">
        <form method="GET" class="bg-light my-5;"
            style="width: 80vw; position:sticky; margin-left: auto; margin-right: auto"
            action={{ route('questions.check', ['pasco_id' => $Pasco->id]) }}>
            <ol>
                @foreach ($pasc as $question)
                    @php
                        $QN = $question['QN'];
                    @endphp
                    <li>
                        <p>{{ $question['question'] }}</p>
                        <input type="radio" class="btn-check {{ ' ' . 'Q' . $QN }}" name="Q{{ $QN }}"
                            id="Q1{{ $QN }}" autocomplete="off" value="{{ $question['options']['A'] }}">
                        <label class="btn btn-outline-dark mb-3" style="min-width: 10rem" for="Q1{{ $QN }}">A)
                            {{ $question['options']['A'] }}</label><br>

                        <input type="radio" class="btn-check {{ ' ' . 'Q' . $QN }}" name="Q{{ $QN }}"
                            id="Q2{{ $QN }}" autocomplete="off" value="{{ $question['options']['B'] }}">
                        <label class="btn btn-outline-dark mb-3" style="min-width: 10rem"
                            for="Q2{{ $QN }}">B)
                            {{ $question['options']['B'] }}</label><br>

                        <input type="radio" class="btn-check {{ ' ' . 'Q' . $QN }}" name="Q{{ $QN }}"
                            id="Q3{{ $QN }}" autocomplete="off" value="{{ $question['options']['C'] }}">
                        <label class="btn btn-outline-dark mb-3" style="min-width: 10rem"
                            for="Q3{{ $QN }}">C) {{ $question['options']['C'] }}</label><br>

                        <input type="radio" class="btn-check {{ ' ' . 'Q' . $QN }}" name="Q{{ $QN }}"
                            id="Q4{{ $QN }}" autocomplete="off" value="{{ $question['options']['D'] }}">
                        <label class="btn btn-outline-dark mb-3" style="min-width: 10rem"
                            for="Q4{{ $QN }}">D) {{ $question['options']['D'] }}</label><br>
                    </li>
                @endforeach
            </ol>
            <div style="display: flex; width: 100%; justify-content:center">
                <x-button class="btn btn-success px-5 my-5" id="submit">Submit</x-button>
            </div>
        </form>
    </div>
    <script>
        // let submit = document.querySelector('#submit');
        // submit.addEventListener('click', ()=>{
        //     submit.disabled = true;
        // })
        function selectAll() {

            let inputs = document.querySelectorAll('input');
            let selectedInputs = [];
            let prevInput = null;
            inputs.forEach((input) => {
                if (prevInput != null) {
                    if (input.name != prevInput.name) {
                        selectedInputs.push(input);
                    }
                } else {
                    selectedInputs.push(input);
                }
                prevInput = input;
            })
            selectedInputs.forEach((input) => input.checked = true)

        }
    </script>
</x-course>
