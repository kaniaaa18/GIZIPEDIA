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
        Schema::create('forums', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('question');
            $table->boolean('is_anonim')->default(false);
            $table->timestamps();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('forums');
    }

};
