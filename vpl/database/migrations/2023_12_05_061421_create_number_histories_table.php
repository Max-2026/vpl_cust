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
            $table->foreignId('number_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('activity', [
                'reserved',
                'purchased',
                'released'
            ]);
            $table->integer('setup_charges');
            $table->integer('monthly_charges');
            $table->integer('annual_charges');
            $table->integer('per_mintue_charges');
            $table->integer('per_sms_charges');
            $table->enum('billing_type', ['prorated', 'non_prorated']);
            $table->unique(['number_id', 'user_id', 'created_at']);
            $table->timestamps();
            $table->softDeletes();
            $table->index('number_id');
            $table->index('user_id');
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
