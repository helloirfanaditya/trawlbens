<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidaterable extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function candidaterable()
    {
        return $this->morphTo();
    }
}
