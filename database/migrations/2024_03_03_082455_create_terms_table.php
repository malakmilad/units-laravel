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
        Schema::create('terms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('media_id')->nullable();
            $table->foreign('media_id')->references('id')->on('media')->onDelete('cascade');
            $table->unsignedBigInteger('taxonomy_id')->nullable();
            $table->foreign('taxonomy_id')->references('id')->on('taxonomies')->onDelete('cascade');
            $table->unsignedBigInteger('sub_term_id')->nullable();
            $table->foreign('sub_term_id')->references('id')->on('sub_terms')->onDelete('cascade');
            $table->string('title');
            $table->string('slug');
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terms');
    }
};
