<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AnalysisResult extends Model
{
    protected $fillable = [
        'financial_record_id', 'health_score', 'health_category',
        'essential_percentage', 'lifestyle_percentage', 'savings_percentage',
        'ratios', 'config_snapshot', 'calculation_detail',
    ];

    protected $casts = [
        'ratios' => 'array',
        'config_snapshot' => 'array',
        'calculation_detail' => 'array',
    ];

    public function financialRecord(): BelongsTo
    {
        return $this->belongsTo(FinancialRecord::class);
    }
}