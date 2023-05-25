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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('photo')->nullable();
            $table->text('details')->nullable();
            $table->integer('views')->default(0);
            $table->string('meta_tag')->nullable();
            $table->string('meta_description')->nullable();
            $table->text('tags')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 == \'pending\'
1 == \'approved\'
2 == \'rejected\'');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
