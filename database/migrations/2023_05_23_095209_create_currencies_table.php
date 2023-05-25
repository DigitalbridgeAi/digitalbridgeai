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
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('sign')->nullable();
            $table->string('value')->nullable();
            $table->tinyInteger('is_default')->nullable();
            $table->timestamps();
        });
    
        
        DB::table('currencies')->insert([
            'name' => 'USD',
            'sign' => '$',
            'value' => 1,
            'is_default' => 1,
        ]);

        DB::table('currencies')->insert([
            'name' => 'EUR',
            'sign' => '€',
            'value' => 0.864870011806488,
            'is_default' => 0,
        ]);

        DB::table('currencies')->insert([
            'name' => 'NGN',
            'sign' => '₦',
            'value' => 410.94,
            'is_default' => 0,
        ]);
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currencies');
    }
};
