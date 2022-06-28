<?php

namespace App\Http\Controllers;

use App\Models\Pasco;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PascoController extends Controller
{
    public function pascos(Subject $subject)
    {
        $pascos = $subject->pascos();
        if (request('search')) {
            $pascos->where('year', 'like', '%' .  request('search') . '%')
                ->orWhere('type', 'like', '%' .  request('search') . '%')
                ->where('subject_id', $subject->id);
        }
        return view('courses.pascos', [
            'pascos' => $pascos->get(),
            'subject'=>Subject::all()
        ]);
    }

    public function showAll()
    {
        $pascos = Pasco::all();
        if (request('search')) {
            $pascos = DB::table('pascos')
            ->where('year', 'like', '%' .  request('search') . '%')
            ->orWhere('type', 'like', '%' .  request('search') . '%')
            ->get();
        }
        return view('courses.pascos', ['pascos' => $pascos, 'subject'=>Subject::all()]);
    }

    public function shoAll()
    {
        $pascos = Pasco::all();
        if (request('search')) {
            $pascos = DB::table('pascos')
            ->where('year', 'like', '%' .  request('search') . '%')
            ->orWhere('type', 'like', '%' .  request('search') . '%')
            ->get();
        }
        return view('courses.pascos', ['pascos' => $pascos, 'subject'=>Subject::all()]);
    }
}
