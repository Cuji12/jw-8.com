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
        Schema::create('case_studies_page', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->text('body')->nullable(false);
            $table->string('image')->nullable();
            $table->string('image_alt')->nullable();
            $table->boolean('active')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_studies_page');
    }
};
