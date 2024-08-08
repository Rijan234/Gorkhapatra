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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer("views")->default(100);
            $table->string('title');
            $table->string('slug')->nullable();
            $table->longText('description');
            $table->string('image');
            $table->string("tags")->nullable();
            $table->longText("meta_description");
            $table->string("author")->nullable();
            $table->string("location");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
