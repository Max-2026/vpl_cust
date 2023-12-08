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
        Schema::create('number_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('number_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->boolean('is_purchased');
            $table->boolean('is_released');
            $table->boolean('is_reserved');
            $table->integer('setup_charges');
            $table->integer('monthly_charges');
            $table->integer('per_mintue_charges');
            $table->integer('per_sms_charges');
            $table->integer('minutes_consumed')->default(0);
            $table->boolean('prorated_billing')->default(true);
            $table->unique(['number_id', 'user_id', 'created_at']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('number_histories');
    }
};
