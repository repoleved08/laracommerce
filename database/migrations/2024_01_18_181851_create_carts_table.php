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
            $table->string('name') ->nullable(true);
            $table->string('email') ->nullable(true);
            $table->string('product_title') ->nullable(true);
            $table->string('quantity') ->nullable(true);
            $table->string('price') ->nullable(true);
            $table->string('product_id') ->nullable(true);
            $table->string('user_id') ->nullable(true);
            $table->string('image') ->nullable(true);
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
