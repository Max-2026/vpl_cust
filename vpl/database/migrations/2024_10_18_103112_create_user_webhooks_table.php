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
        Schema::create('user_webhooks', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('user_id')->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreignId('number_id')->constrained()->onDelete('cascade');
            $table->string('secret')->nullable();
            $table->string('url');
            $table->timestamps();
            $table->unique(['number_id', 'url']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_webhooks');
    }
};
