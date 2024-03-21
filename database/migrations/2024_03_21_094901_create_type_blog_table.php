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
        Schema::create('blog_type', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('blog_id');
            $table->unsignedBiginteger('type_id');
            $table->foreign('blog_id')->references('id')
                ->on('blogs')->onDelete('cascade');
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
        Schema::dropIfExists('type_blog');
    }
};
