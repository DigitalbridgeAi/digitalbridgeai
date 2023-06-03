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
        Schema::create('manage_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('time')->nullable();
            $table->timestamps();
        });

        DB::table('manage_schedules')->insert([
            'name' => 'Hour',
            'time' => '1',
        ]);
        DB::table('manage_schedules')->insert([
            'name' => 'Day',
            'time' => '24',
        ]);
        DB::table('manage_schedules')->insert([
            'name' => 'Week',
            'time' => '168',
        ]);
        DB::table('manage_schedules')->insert([
            'name' => 'Month',
            'time' => '720',
        ]);
        DB::table('manage_schedules')->insert([
            'name' => 'Year',
            'time' => '8760',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manage_schedules');
    }
};
