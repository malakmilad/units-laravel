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
        Schema::create('taxonomy_type', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('taxonomy_id');
            $table->unsignedBiginteger('type_id');
            $table->foreign('taxonomy_id')->references('id')
                ->on('taxonomies')->onDelete('cascade');
            $table->foreign('type_id')->references('id')
            ->on('types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_taxonomy');
    }
};
