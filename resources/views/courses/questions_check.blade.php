<x-course>
    <x-slot name='title'>
        Your Results!
    </x-slot>
    <x-slot name='message'>
        <a class="btn btn-light btn-lg " href={{ route('pascos', ['subject' => $Pasco->subject->slug]) }}
            role="button">
            <i class="fa fa-backward" aria-hidden="true"></i>
        </a>
        @php
            $UA = json_encode($provided_answers);
            $CA = json_encode($answers);
        @endphp;

    </x-slot>
    <div class="container" style="background: #f2f1ef">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#resultsModal">
            Show Results
        </button>

        <!-- Modal -->
        <div class="modal fade" id="resultsModal" tabindex="-1" aria-labelledby="resultsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-light">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title h1" id="resultsModalLabel">Your Results</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="resultsDisplay" style="background: #ffffff7b">
                        {{-- Results goes in here --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <a type="button" class="btn btn-success"
                            href={{ route('record.save', ['pasco' => $Pasco]) }}>Save changes</a>
                    </div>
                </div>
            </div>
        </div>

        <form method="GET" class="bg-light my-5"
            style="width: max-content; position:sticky; margin-left: auto; margin-right: auto"
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
            {{-- <div style="display: flex; width: 100%; justify-content: center">
                <x-button class="btn btn-success px-5">Submit</x-button>

            </div> --}}
        </form>
    </div>
    <script>
        let UA = JSON.parse("{{ json_encode($provided_answers) }}".replace(/&quot;/g, '"'))
        let CA = JSON.parse("{{ json_encode($answers) }}".replace(/&quot;/g, '"'))

        function showResults(nCorrectAnswers, answered, total) {
            let numberOfQuestionsAnswered = Object.keys(UA).length;
            let totalNumberOfQuestions = Object.keys(CA).length;
            let scoreDiv = document.createElement('div');
            let Grade = grade(nCorrectAnswers, totalNumberOfQuestions);
            scoreDiv.innerHTML = `
                        <h1> Congratulations </h1>
                        <p>
                            You Answered ${numberOfQuestionsAnswered} out of ${totalNumberOfQuestions} and scored ${nCorrectAnswers} grade ${Grade}!
                        </p>`;
            let scoreDisplay = document.getElementById('resultsDisplay');
            scoreDisplay.appendChild(scoreDiv)
            // cokieeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeees
            setCookie('QA', numberOfQuestionsAnswered, 1);
            setCookie('TQ', totalNumberOfQuestions, 1);
            setCookie('score', nCorrectAnswers, 1);
            setCookie('grade', Grade, 1);

            // cokieeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeees
            return 0;
        }

        function isCorrect() {
            let nCorrectAnswers = 0;
            for (const QN in UA) {
                if (Object.hasOwn(UA, QN)) {
                    if (UA[QN] == CA[QN]) {
                        nCorrectAnswers++
                        let options = document.querySelectorAll(`.${QN}`);
                        options.forEach((option) => option.disabled = true);
                        options.forEach((option) => option.value == UA[QN] ? option.labels[0].classList.add('btn-success') :
                            Option.disabled = true);
                    } else {
                        let options = document.querySelectorAll(`.${QN}`);
                        let wrongAnswer, correctAnswer;
                        options.forEach((option) => option.value == UA[QN] ? wrongAnswer = option : wrongAnswer =
                            wrongAnswer);
                        options.forEach((option) => option.value == CA[QN] ? correctAnswer = option : option.disabled =
                            true);
                        correctAnswer.disabled = true;
                        wrongAnswer.labels[0].classList.add('btn-danger');
                        correctAnswer.labels[0].classList.add('btn-success');
                    }
                }
            }
            ///Grabbing and styling unaswered questions:
            function unanswered() {
                let options = document.querySelectorAll('input');
                options.forEach(option => {
                    if (option.disabled == false) {
                        option.labels[0].classList.add('btn-warning');
                        option.disabled = true;
                        option.value == CA[option.name]? option.labels[0].classList.replace('btn-warning','btn-success')
                                                         :option.disabled = true;
                }
            })
            }
            unanswered();
            return showResults(nCorrectAnswers);
        }
        isCorrect();

        function setCookie(cname, cvalue, exdays) {
            const d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            let expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + "; path=/";
        }

        function grade(score, tQN) {
            score = (score / tQN) * 100;
            return score >= 80 ? 'A' :
                score >= 70 ? 'B2' :
                score >= 65 ? 'B3' :
                score >= 55 ? 'C4' :
                score >= 50 ? 'C5' :
                score >= 45 ? 'C6' :
                score >= 40 ? 'D7' : 'F9';
        }
        let submit = document.querySelector('#save');
        save.addEventListener('click', ()=>{
            submit.disabled = true;
        })
    </script>
</x-course>
