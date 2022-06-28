<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function level(){
        return $this->belongsTo(Level::class);
    }
    public function subjects(){
        return $this->hasMany(Subject::class);
    }

}
