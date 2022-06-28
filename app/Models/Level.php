<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $with = ['programmes'];
    public function programmes()
    {
        return $this->hasMany(Programme::class);
    }
}
