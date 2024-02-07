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
            $table->foreignId('area_id')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('vendor_id')
                ->nullable()
                ->references('id')
                ->on('users');
            $table->string('rate_center')->nullable();
            $table->string('number', 20)->unique();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_reserved')->default(false);
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
            $table->text('legal_requirements')->nullable();
            $table->boolean('voice_capablity')->default(true);
            $table->boolean('sms_inbound_capablity')->default(false);
            $table->boolean('sms_outgoing_capablity')->default(false);
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
