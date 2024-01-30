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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->String('number')->unique();
            $table->String('area')->nullable();
            $table->String('country')->nullable();
            $table->String('billing_type');
            $table->integer('setup_cost')->default('0');
            $table->integer('monthly_charges')->default('0');
            $table->integer('annual_charges')->default('0');
            $table->integer('talk_time')->default('0');
            $table->integer('monthly_plan')->default('0');
            $table->integer('plan_setup')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
