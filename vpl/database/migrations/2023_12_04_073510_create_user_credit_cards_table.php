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
        Schema::create('user_credit_cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('card_number', 30)->unique();
            $table->string('card_type', 30)->nullable();
            $table->string('name_on_card', 30);
            $table->string('card_expiry', 30);
            $table->string('cvv', 10)->nullable();
            $table->boolean('is_primary')->default(1); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_credit_cards');
    }
};