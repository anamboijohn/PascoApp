<?php

namespace App\Http\Controllers;

use App\Models\Pasco;
use App\Models\User;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecordController extends Controller
{

    public function recordSum($records)
    {
        $scores = [];
        foreach ($records as $record) {
            $scores[] = $record['score'];
        }
        $sum = array_sum($scores);
        return $sum;
    }

    public function save(Pasco $pasco){
        $id = Auth::user()->id;
        $user = User::find($id);
        $QA = $_COOKIE['QA'];
        $TQ = $_COOKIE['TQ'];
        $score = $_COOKIE['score'];
        $converted = $score/$TQ;
        $record = $user->records()->create([
                                            'grade'=>$_COOKIE['grade'],
                                            'pasco_id'=>$pasco->id,
                                            'no_of_questions_answered'=>$QA,
                                            'total_no_questions'=>$TQ,
                                            'score'=>$score,
                                            'score_converted'=>$converted
                                        ]);
        $records = $record->user->records;
       $total_score = $record->user->leaderboard()->updateOrCreate(
            ['user_id'=>$record->user->id],
            ['score' => $this->recordSum($records)]
        );
        // view('courses.records', ['pasco'=>$pasco, 'records'=>$user->records]);
        return redirect()->route('record.view', ['pasco'=>$pasco]);
    }

    public function saveView(Pasco $pasco){
        $user = Auth::user();
       return view('courses.records', ['pasco'=>$pasco, 'records'=>$user->records]);
    }
    public function generatePDF(User $user){
        $pdf = FacadePdf::loadView('resultsDownload', ['records'=>$user->records])->setPaper('a4', 'potrait');
        return $pdf->download('Results.pdf');
    }
    public function showAll(User $user){
        $records = $user->records;
        $_POST = array();
        return view('courses.reports', ['records'=>$records]);
    }
}
