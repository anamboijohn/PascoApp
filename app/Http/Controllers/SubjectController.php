<?php

namespace App\Http\Controllers;

use App\Models\Programme;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function subjects(Programme $programme){
        $subjects = $programme->subjects;
        return view('courses.subjects', [
            'subjects' => $subjects,
        ]);
    }
}
