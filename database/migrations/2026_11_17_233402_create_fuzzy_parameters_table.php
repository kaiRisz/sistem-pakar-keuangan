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
        Schema::create('fuzzy_parameters', function (Blueprint $table) {
            $table->id();
            $table->string('variable_name', 20);    // pokok | gaya_hidup | tabungan
            $table->string('membership_name', 20);  // rendah | sedang | tinggi
            $table->string('membership_type', 20);  // trapezoid | triangle
            $table->json('parameters');             // [a,b,c,d] atau [a,b,c]
            $table->timestamps();

            $table->unique(['variable_name', 'membership_name']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuzzy_parameters');
    }
};
