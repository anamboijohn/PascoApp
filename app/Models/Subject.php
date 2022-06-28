<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function programme(){
        return $this->belongsTo(Programme::class);
    }
    public function pascos(){
        return $this->hasMany(Pasco::class);
    }
}
