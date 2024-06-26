<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('author');
            $table->timestamp('published_date')->nullable();
            $table->string('photo')->nullable();
            $table->string('description')->nullable();
            $table->string('isbn')->nullable();
            $table->string('genre')->nullable();
            $table->string('publisher')->nullable();
            $table->string('pages')->nullable();
            $table->string('language')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
