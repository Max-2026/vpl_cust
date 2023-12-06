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
        Schema::create('numbers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('vendor_id')->nullable()->references('id')->on('users');
            $table->string('area_name');
            $table->integer('area_code');
            $table->string('rate_center')->nullable();
            $table->string('number', 20)->unique();
            $table->boolean('is_active')->default(1);
            $table->integer('setup_charges');
            $table->integer('monthly_charges');
            $table->integer('per_mintue_charges');
            $table->integer('per_sms_charges');
            $table->string('forwarding_url');
            $table->integer('channels')->default(1);
            $table->integer('talktime')->default(0);
            $table->integer('minutes_consumed')->default(0);
            $table->integer('free_incoming_minutes')->default(0);
            $table->integer('free_incoming_sms')->default(0);
            $table->boolean('legal_requirement')->default(1);
            $table->boolean('voice_capablity')->default(1);
            $table->boolean('sms_inbound_capablity')->default(0);
            $table->boolean('sms_outgoing_capablity')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('numbers');
    }
};
