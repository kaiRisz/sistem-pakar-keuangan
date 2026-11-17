<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('analysis_results', function (Blueprint $table) {
                $table->id();
                $table->foreignId('financial_record_id')->unique()->constrained()->cascadeOnDelete();
                $table->decimal('health_score', 5, 2);
                $table->string('health_category', 20);
                $table->decimal('essential_percentage', 5, 2);
                $table->decimal('lifestyle_percentage', 5, 2);
                $table->decimal('savings_percentage', 5, 2);
                $table->json('ratios');              
                $table->json('config_snapshot');     
                $table->json('calculation_detail'); 
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analysis_results');
    }
};
