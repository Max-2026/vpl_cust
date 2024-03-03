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
            $table->foreignId('country_id')->constrained()->onDelete('cascade');
            $table->foreignId('current_user_id')->nullable()
                ->references('id')->on('users');
            $table->foreignId('vendor_id')->nullable()->constrained()
                ->onDelete('cascade');
            $table->string('number', 20)->unique();
            $table->boolean('is_active')->default(true);
            $table->integer('setup_charges');
            $table->integer('monthly_charges');
            $table->integer('annual_charges')->nullable();
            $table->integer('per_mintue_charges')->nullable();
            $table->integer('per_sms_charges')->nullable();
            $table->integer('talktime_qouta');
            $table->integer('sms_qouta');
            $table->text('legal_requirements')->nullable();
            $table->boolean('voice_inbound_capable')->default(true);
            $table->boolean('sms_inbound_capable')->default(false);
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
