<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class ProgrammeController extends Controller
{

    public function programmes(Level $level)
    {
        $programmes = $level->programmes;
        $firstThree = $programmes->take(3);
        $theRest = $programmes->filter(fn ($p) => !in_array($p, $firstThree->all()));
        return view('courses.programmes', [
            'programmes' => $programmes,
            'firstThree' => $firstThree,
            'theRest' => $theRest
        ]);
    }
}
