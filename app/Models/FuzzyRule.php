<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FuzzyRule extends Model
{
    protected $fillable = [
        'rule_code', 'x1_category', 'x2_category', 'x3_category',
        'score_consequent', 'essential_target', 'lifestyle_target', 'savings_target',
    ];
}