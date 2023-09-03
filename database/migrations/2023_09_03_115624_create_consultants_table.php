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
        Schema::create('consultants', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable(false);
            $table->string('title', 100)->nullable(false);
            $table->text('body')->nullable(false);
            $table->string('email', 100)->nullable(false);
            $table->boolean('active')->nullable('false');
            $table->foreignId('our_consultants_page_id')
                ->nullable()
                ->constrained('our_consultants_page')
                ->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultants');
    }
};
