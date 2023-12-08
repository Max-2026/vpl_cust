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
        Schema::create('user_preferences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->boolean('low_talktime_alert')->default(false);
            $table->integer('low_talktime_threshold')->default(10);
            $table->boolean('monthly_invoices_email')->default(false);
            $table->boolean('record_calls')->default(false);
            $table->boolean('monthly_call_records_email')->default(false);
            $table->boolean('missed_calls_alert_email')->default(false);
            $table->boolean('missed_calls_alert_sms')->default(false);
            $table->boolean('prorated_billing')->default(true);
            $table->boolean('newsletter_email')->default(true);
            $table->string('sms_callback_url')->nullable();
            $table->string('sms_callback_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_preferences');
    }
};
