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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->nullable()->unique();
            $table->string('photo')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->tinyInteger('role_id')->default(0);
            $table->string('password');
            $table->boolean('status')->default(true);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('admins')->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '01629552892',
            'role_id' => 0,
            'photo' => 'nB8Hlzch1649567593.jpg',
            'password' => bcrypt('12345678'),
            'status' => 1,
            'remember_token' => 'nL2JkhiOxuTHj3UXgkaULKuDTC7e292XrNTeSkn8gjnulpc17HoYyw9Cp4hW',
            'created_at' => now(),
            'updated_at' => now(),
            
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
