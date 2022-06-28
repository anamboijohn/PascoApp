<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with  = ['options'];
    public function pasco()
    {
        return $this->belongsTo(Pasco::class);
    }
    public function options()
    {
        return $this->hasMany(Option::class);
    }
}
