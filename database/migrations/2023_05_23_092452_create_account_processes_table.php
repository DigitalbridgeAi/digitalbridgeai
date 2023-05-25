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
      
        Schema::create('account_processes', function (Blueprint $table) {
            $table->id();
            $table->string('icon')->nullable();
            $table->string('title')->nullable();
            $table->string('details')->nullable();
            $table->timestamps();
        });

        DB::table('account_processes')->insert([
            'icon' => 'fas fa-exchange-alt',
            'title' => 'Get Profit',
            'details' => 'Repellendus consequuntur vel nam numquam labore reiciendis rem neque eveniet, dicta molestias.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('account_processes')->insert([
            'icon' => 'fas fa-user-check',
            'title' => 'Purchase Investment Plan',
            'details' => 'Repellendus consequuntur vel nam numquam labore reiciendis rem neque eveniet, dicta molestias.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('account_processes')->insert([
            'icon' => 'fas fa-user-plus',
            'title' => 'Create Account',
            'details' => 'Repellendus consequuntur vel nam numquam labore reiciendis rem neque eveniet, dicta molestias.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_processes');
    }
};
