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
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('method_code')->nullable();
            $table->decimal('amount', 28, 8)->default(0.00000000);
            $table->string('method_currency')->nullable();
            $table->decimal('charge', 28, 8)->default(0.00000000);
            $table->decimal('rate', 28, 8)->default(0.00000000);
            $table->decimal('final_amo', 28, 8)->default(0.00000000);
            $table->string('btc_amo')->nullable();
            $table->string('btc_wallet')->nullable();
            $table->string('trx')->nullable();
            $table->integer('try')->default(0);
            $table->tinyInteger('status')->default(0)->comment('1=>success, 2=>pending, 3=>cancel');
            $table->tinyInteger('from_api')->default(0);
            $table->string('admin_feedback')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deposits');
    }
};
