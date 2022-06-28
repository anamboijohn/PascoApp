<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\Programme;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function levels(){
        //return a  view containing both levels
        return view('courses.levels', [
            'levels'=>Level::all()
        ]);
    }

}
