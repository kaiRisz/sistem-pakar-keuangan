<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class FinancialRecord extends Model
{
    protected $fillable = [
        'user_id', 'period_month', 'period_year', 'income',
        'essential_expense', 'lifestyle_expense', 'savings', 'remaining_balance',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function analysisResult(): HasOne
    {
        return $this->hasOne(AnalysisResult::class);
    }
}