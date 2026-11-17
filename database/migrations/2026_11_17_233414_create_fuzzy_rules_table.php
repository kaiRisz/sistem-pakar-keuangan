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
        Schema::create('fuzzy_rules', function (Blueprint $table) {
            $table->id();
            $table->string('rule_code', 5)->unique();   // R01..R27
            $table->string('x1_category', 10);
            $table->string('x2_category', 10);
            $table->string('x3_category', 10);
            $table->decimal('score_consequent', 5, 2);
            $table->decimal('essential_target', 5, 2);
            $table->decimal('lifestyle_target', 5, 2);
            $table->decimal('savings_target', 5, 2);
            $table->timestamps();

            $table->unique(['x1_category', 'x2_category', 'x3_category']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuzzy_rules');
    }
};
