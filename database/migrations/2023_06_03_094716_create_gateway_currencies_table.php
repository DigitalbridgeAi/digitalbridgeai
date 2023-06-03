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
        Schema::create('gateway_currencies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('currency')->nullable();
            $table->string('symbol')->nullable();
            $table->integer('method_code')->nullable();
            $table->string('gateway_alias')->nullable();
            $table->decimal('min_amount', 28, 8)->default(0.00000000);
            $table->decimal('max_amount', 28, 8)->default(0.00000000);
            $table->decimal('percent_charge', 5, 2)->default(0.00);
            $table->decimal('fixed_charge', 28, 8)->default(0.00000000);
            $table->decimal('rate', 28, 8)->default(0.00000000);
            $table->string('image')->nullable();
            $table->text('gateway_parameter')->nullable();
            $table->timestamps();
        });

        DB::table('gateway_currencies')->insert([
            'name' => 'Coinbase Commerce - USD',
            'currency' => 'USD',
            'symbol' => '$',
            'method_code' => 506,
            'gateway_alias' => 'CoinbaseCommerce',
            'min_amount' => '1.00000000',
            'max_amount' => '10000.00000000',
            'percent_charge' => '10.00',
            'fixed_charge' => '1.00000000',
            'rate' => '10.00000000',
            'image' => NULL,
            'gateway_parameter' => '{\"api_key\":\"------------\",\"secret\":\"------------\"}',

        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gateway_currencies');
    }
};
