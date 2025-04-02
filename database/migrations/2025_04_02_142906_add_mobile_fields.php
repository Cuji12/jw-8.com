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
        Schema::table('about_us_pages', function (Blueprint $table) {
            $table->string('mobile_image')->nullable();
            $table->string('mobile_image_alt')->nullable();
        });

        Schema::table('our_solutions_pages', function (Blueprint $table) {
            $table->string('mobile_image')->nullable();
            $table->string('mobile_image_alt')->nullable();
        });

        Schema::table('case_studies_pages', function (Blueprint $table) {
            $table->string('mobile_image')->nullable();
            $table->string('mobile_image_alt')->nullable();
        });

        Schema::table('useful_links_pages', function (Blueprint $table) {
            $table->string('mobile_image')->nullable();
            $table->string('mobile_image_alt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('about_us_pages', function (Blueprint $table) {
            $table->dropColumn('mobile_image');
            $table->dropColumn('mobile_image_alt');
        });

        Schema::table('our_solutions_pages', function (Blueprint $table) {
            $table->dropColumn('mobile_image');
            $table->dropColumn('mobile_image_alt');
        });

        Schema::table('case_studies_pages', function (Blueprint $table) {
            $table->dropColumn('mobile_image');
            $table->dropColumn('mobile_image_alt');
        });

        Schema::table('useful_links_pages', function (Blueprint $table) {
            $table->dropColumn('mobile_image');
            $table->dropColumn('mobile_image_alt');
        });
    }
};
