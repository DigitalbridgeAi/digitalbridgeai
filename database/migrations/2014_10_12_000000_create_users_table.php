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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->nullable();
            $table->string('photo')->nullable();
            $table->string('zip')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->boolean('is_provider')->default(false);
            $table->boolean('status')->default(false);
            $table->text('verification_link')->nullable();
            $table->enum('email_verified', ['Yes', 'No'])->default('No');
            $table->double('balance')->default(0);
            $table->double('interest_balance')->default(0);
            $table->text('affilate_code')->nullable();
            $table->tinyInteger('referral_id')->default(0);
            $table->tinyInteger('twofa')->default(0);
            $table->string('go')->nullable();
            $table->boolean('verified')->default(false);
            $table->text('details')->nullable();
            $table->tinyInteger('kyc_status')->default(0)->comment('0 == \'pending\'
1 == \'approve\'
2 == \'rejected\'');
            $table->longText('kyc_info')->nullable();
            $table->text('kyc_reject_reason')->nullable();
            $table->boolean('is_banned')->default(false)->comment('1 === banned
0 === active');

            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            'name' => 'GeniusOcean',
            'username' => 'genius',
            'email' => 'genius@gmail.com',
            'password' => bcrypt('12345678'),
            'email_verified' => 'Yes',
            'balance' => 2284.7,
            'affilate_code' => '3266dcfa238c067719a09f1eabc4e1b3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
      

    

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
