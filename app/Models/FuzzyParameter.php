<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FuzzyParameter extends Model
{
    protected $fillable = ['variable_name', 'membership_name', 'membership_type', 'parameters'];

    protected $casts = ['parameters' => 'array'];
}