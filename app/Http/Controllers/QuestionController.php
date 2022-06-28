<?php

namespace App\Http\Controllers;

use App\Models\Pasco;
use Barryvdh\DomPDF\Facade;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    static function pascoBuilder($pasco){
        $pasc = [];
        $questions = $pasco->questions;
        foreach ($questions as $pas) :
            $pasc[$pas->id] = [
                'question' => $pas->question,
                'QN'=>$pas->QN,
                'options' => [
                    'A' => $pas->options->first()->A,
                    'B' => $pas->options->first()->B,
                    'C' => $pas->options->first()->C,
                    'D' => $pas->options->first()->D,
                    'answer' => $pas->options->first()->answer
                ]
            ];
        endforeach;
        return $pasc;
    }

    public function questions(Pasco $pasco)
    {
        $pasc = $this->pascoBuilder($pasco);

        return view('courses.questions', ['pasc' => $pasc, 'Pasco' => $pasco]);
    }
    public function check(Request $request, $pasco_id)
    {
        $pasco = Pasco::find($pasco_id);
        $questions  = $pasco->questions;
        $answers=[];
        foreach ($questions as $question) {
            $answers['Q'.$question->QN] = $question->options->first()->answer;
        };
        $pasc = $this->pascoBuilder($pasco);


        return view('courses.questions_check', ['pasc' => $pasc, 'Pasco' => $pasco,
                                                'provided_answers'=>$request->query(),
                                                'answers'=>$answers
                                            ]);

    }


}
