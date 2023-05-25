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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('loader')->nullable();
            $table->string('admin_loader')->nullable();
            $table->string('banner')->nullable();
            $table->string('title')->nullable();
            $table->text('header_email')->nullable();
            $table->text('header_phone')->nullable();
            $table->text('footer')->nullable();
            $table->text('copyright')->nullable();
            $table->string('colors')->nullable();
            $table->tinyInteger('is_talkto')->default(1);
            $table->text('talkto')->nullable();
            $table->tinyInteger('is_language')->default(1);
            $table->tinyInteger('is_loader')->default(1);
            $table->text('map_key')->nullable();
            $table->tinyInteger('is_disqus')->default(0);
            $table->longText('disqus')->nullable();
            $table->tinyInteger('is_contact')->default(0);
            $table->tinyInteger('is_faq')->default(0);
            $table->tinyInteger('is_maintain')->default(0);
            $table->text('maintain_text')->nullable();
            $table->longText('day_of')->nullable();
            $table->tinyInteger('withdraw_status')->default(0);
            $table->string('smtp_host')->nullable();
            $table->string('smtp_port')->nullable();
            $table->string('smtp_encryption')->nullable();
            $table->string('smtp_user')->nullable();
            $table->string('smtp_pass')->nullable();
            $table->string('from_email')->nullable();
            $table->string('from_name')->nullable();
            $table->tinyInteger('is_smtp')->default(0);
            $table->tinyInteger('is_currency')->default(0);
            $table->tinyInteger('currency_format')->default(0);
            $table->text('subscribe_success')->nullable();
            $table->text('subscribe_error')->nullable();

            $table->text('error_title')->nullable();
            $table->text('error_text')->nullable();
            $table->string('error_photo')->nullable();
            $table->string('breadcumb_banner')->nullable();
            $table->tinyInteger('is_admin_loader')->default(0);
            $table->string('currency_code')->nullable();
            $table->string('currency_sign')->nullable();
            $table->tinyInteger('is_verification_email')->default(0);
            $table->double('withdraw_fee')->default(0);
            $table->double('withdraw_charge')->default(0);
            $table->tinyInteger('is_affilate')->default(1);
            $table->double('affilate_charge')->default(0);
            $table->text('affilate_banner')->nullable();
            $table->string('secret_string')->nullable();
            $table->integer('gap_limit')->default(300);
            $table->tinyInteger('isWallet')->default(0);
            $table->integer('affilate_new_user')->default(0);
            $table->integer('affilate_user')->default(0);
            $table->string('footer_logo')->nullable();
            $table->string('pm_account')->nullable();
            $table->tinyInteger('is_pm')->default(0);
            $table->string('cc_api_key')->nullable();
            $table->tinyInteger('balance_transfer')->default(0);
            $table->string('twilio_account_sid')->nullable();
            $table->string('twilio_auth_token')->nullable();
            $table->string('twilio_default_number')->nullable();
            $table->tinyInteger('twilio_status')->default(0);
            $table->string('nexmo_key')->nullable();
            $table->string('nexmo_secret')->nullable();
            $table->string('nexmo_default_number')->nullable();
            $table->tinyInteger('nexmo_status')->default(0);
            $table->tinyInteger('two_factor')->default(0);
            $table->tinyInteger('kyc')->default(0);
            $table->text('menu')->nullable();
            $table->double('transfer_fixed')->nullable();
            $table->double('transfer_percentage')->nullable();
            $table->double('transfer_min')->nullable();
            $table->double('transfer_max')->nullable();
            $table->double('fixed_request_charge')->nullable();
            $table->double('percentage_request_charge')->nullable();
            $table->double('minimum_request_money')->nullable();
            $table->double('maximum_request_money')->nullable();
            $table->longText('module_section')->nullable();
            $table->timestamps();
        });

        // DB::unprepared(file_get_contents(base_path('database/migrations/general.sql')));

        DB::table('general_settings')->insert([
            'logo' => 'Oky5D8721647410759.png',
            'favicon' => '16393007481563335660service-icon-1.png',
            'loader' => '5monWltX1641808745.gif',
            'admin_loader' => '33CiUFaI1641808748.gif',
            'banner' => '1563350277herobg.jpg',
            'title' => 'DigitalBridge - Digital Crypto Investment Platform',
            'header_email' => 'info@example.com',
            'header_phone' => '0123 456789',
            'footer' => 'COPYRIGHT © 2023. All Rights Reserved By <a href="http://digitalbridge.ai/">DigitalBridge</a>',
            'colors' => '#0ba026',
            'is_talkto' => 0,
            'talkto' => '<script type="text/javascript"> var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date(); (function(){ var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0]; s1.async=true; s1.src="https://embed.tawk.to/5bc2019c61d0b77092512d03/default"; s1.charset="UTF-8"; s1.setAttribute("crossorigin","*"); s0.parentNode.insertBefore(s1,s0); })();  </script>',
            'is_language' => 1,
            'is_loader' => 1,
            'map_key' => 'AIzaSyB1GpE4qeoJ__70UZxvX9CTMUTZRZNHcu8',
            'is_disqus' => 1,
            'disqus' => 'newspaper-7',
            'is_contact' => 1,
            'is_faq' => 1,
            'is_maintain' => 0,
            'maintain_text' => NULL,
            'day_of' => 'Sun , Tue , Wed , Sat',
            'withdraw_status' => 1,
            'smtp_host' => 'sandbox.smtp.mailtrap.io',
            'smtp_port' => '2525',
            'smtp_encryption' => 'tls',
            'smtp_user' => '1cfbf921dfbdc2',
            'smtp_pass' => 'c2e76dcbaea7f6',
            'from_email' => 'admin@digitalbridge.ai',
            'from_name' => 'DigitalBridge',
            'is_smtp' => 0,
            'is_currency' => 1,
            'currency_format' => 0,
            'subscribe_success'=> 'Thank you for subscribing to our newsletter.',
            'subscribe_error' => 'This email has already been taken.',
            'error_title' => 'OOPS! Page Not Found',
            'error_text' => 'THE PAGE YOU ARE LOOKING FOR MIGHT HAVE BEEN REMOVED, HAD ITS NAME CHANGED, OR IS TEMPORARILY UNAVAILABLE.',
            'error_photo' => '16392899281561878540404.png',
            'breadcumb_banner' => '16392899281561878540404.png',
            'is_admin_loader' => 1,
            'currency_code' => 'USD',
            'currency_sign' => '$',
            'is_verification_email' => 0,
            'withdraw_fee' => '5',
            'withdraw_charge' => '5',
            'is_affilate' => 1,
            'affilate_charge' => '10',
            'affilate_banner' => '16406712051566471347add.jpg',
            'secret_string' => 'digitalbridge',
            'gap_limit' => '300',
            'isWallet' => 1,
            'affilate_new_user' => '10',
            'affilate_user' => '5',
            'footer_logo' => '1A7mierj1647410758.png',
            'pm_account' => 'U1234567',
            'is_pm' => 1,
            'cc_api_key' => 'cdb2163c-91cc-4fa6-b3fc-7de11bdcdf1a',
            'balance_transfer' => 1,
            'twilio_account_sid' => 'ACb87cec0c7d04b80d78bf1647edf8f67f',
            'twilio_auth_token' => 'ee60fb893d6e7a2db56e5748e5eab8a3',
            'twilio_default_number' => '+12029334000',
            'twilio_status' => 1,
            'nexmo_key' => 'ba9111b8',
            'nexmo_secret' => 'cgxbAg4KnE80bcKx',
            'nexmo_default_number' => '+12029334000',
            'nexmo_status' => 1,
            'two_factor' => 0,
            'kyc' => 1,
            'menu' => '{"Home":{"title":"Home","dropdown":"no","href":"\/","target":"self"},"About":{"title":"About","dropdown":"no","href":"\/about","target":"self"},"Plans":{"title":"Plans","dropdown":"no","href":"\/plans","target":"self"},"Blog":{"title":"Blog","dropdown":"no","href":"\/blogs","target":"self"}}',
            'transfer_fixed'  => 1,
            'transfer_percentage' => '0.8',
            'transfer_min' => '10',
            'transfer_max' => '1000',
            'fixed_request_charge' => '1',
            'percentage_request_charge' => '0.3',
            'minimum_request_money' => '1000',
            'maximum_request_money' => '5000',
            'module_section' => 'Invest , Transfer & Request , Deposits , Payouts',
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};
