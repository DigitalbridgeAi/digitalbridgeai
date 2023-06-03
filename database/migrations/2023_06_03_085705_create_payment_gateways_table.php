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
        Schema::create('payment_gateways', function (Blueprint $table) {
            $table->id();
            $table->integer('form_id')->default(0);
            $table->integer('code')->default(0);
            $table->string('name')->nullable();
            $table->string('alias')->nullable();
            $table->string('status')->nullable();
            $table->string('gateway_parameters')->nullable();
            $table->string('supported_currencies')->nullable();
            $table->string('crypto')->nullable();
            $table->string('extra')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        DB::table('payment_gateways')->insert([
            'form_id' => 0,
            'code' => 506,
            'name' => 'Coinbase Commerce',
            'alias' => 'CoinbaseCommerce',
            'status' => 1,
            'gateway_parameters' => '{"api_key":{"title":"API Key","global":true,"value":"------------"},"secret":{"title":"Webhook Shared Secret","global":true,"value":"------------"}}',
            'supported_currencies' => '["1"]',
            'crypto' => 0,
            'extra' => '{"endpoint":{"title": "Webhook Endpoint","value":"ipn.CoinbaseCommerce"}}',
            'description' => NULL,
            
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_gateways');
    }
};
