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
        Schema::create('useful_links', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->nullable(false);
            $table->string('link')->nullable(false);
            $table->text('body')->nullable(false);
            $table->boolean('active')->nullable(false);
            $table->foreignId('useful_links_page_id')
                ->nullable()
                ->constrained('useful_links_page')
                ->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('useful_links');
    }
};