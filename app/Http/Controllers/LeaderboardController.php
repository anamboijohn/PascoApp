<?php

namespace App\Http\Controllers;

use App\Models\Leaderboard;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;

class LeaderboardController extends Controller
{
    public function leader(){
        $orderedLeaderboard =  Leaderboard::with('user')->orderBy('score', 'desc')->get()->take(100);
        return view('courses.leaderboard', ['users'=>collect($orderedLeaderboard)]);
    }

}
