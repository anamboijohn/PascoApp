<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Leaderboard extends Model
{
    use HasFactory;

    protected $guarded =[];
    protected $with = ['user'];
    public function user(){
        return $this->belongsTo(User::class);
    }




}
