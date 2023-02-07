<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('connected_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('user_id');
            $table->string('provider');
            $table->string('provider_id');
            $table->string('name')->nullable();
            $table->string('nickname')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
            $table->text('avatar_path')->nullable();
            $table->string('token', 1071);
            $table->string('secret')->nullable(); // OAuth1
            $table->string('refresh_token', 1071)->nullable(); // OAuth2
            $table->dateTime('expires_at')->nullable(); // OAuth2
            $table->timestamps();

            $table->index(['user_id', 'id']);
            $table->index(['provider', 'provider_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('connected_accounts');
    }
};
