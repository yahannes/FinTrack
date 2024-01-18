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
        Schema::create('stuff_statements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stuff_id')->constrained('company_stuffs')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('salary_10');
            $table->integer('salary_25');
            $table->integer('salary');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stuff_statements');
    }
};
