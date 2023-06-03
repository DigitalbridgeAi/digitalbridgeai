<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\KycForm;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    
        Schema::create('kyc_forms', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('user_type')->nullable();
            $table->integer('type')->nullable();
            $table->string('label')->nullable();
            $table->string('name')->nullable();
            $table->tinyInteger('required')->default(0);
            $table->tinyInteger('status')->default(0);  
            $table->timestamps();
        });
   
        $kyc_forms = KycForm::create([
            'user_type' => 1,
            'type' => 1,
            'label' => 'Full Name',
            'name' => 'full_name',
            'required' => 1,
        ]);

        $kyc_forms = KycForm::create([
            'user_type' => 1,
            'type' => 2,
            'label' => 'NID',
            'name' => 'nid',
            'required' => 1,
        ]);

        $kyc_forms = KycForm::create([
            'user_type' => 1,
            'type' => 3,
            'label' => 'Present Address',
            'name' => 'present_address',
            'required' => 1,
        ]);

        $kyc_forms = KycForm::create([
            'user_type' => 1,
            'type' => 3,
            'label' => 'Parmanent Address',
            'name' => 'parmanent_address',
            'required' => 1,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kyc_forms');
    }
};
