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
        Schema::create('prize_numbers_purchased', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // numero usuario 
            $table->unsignedBigInteger('award_id'); // numero premio 
            $table->integer('numberPurchased'); // numero comprado 
            
            $table->foreign('user_id')
                    ->references('id') // Referencia a coluna 'id' da tabela 'users'
                    ->on('users')
                    ->onDelete('cascade');

            $table->foreign('award_id')
                    ->references('id') // Referencia a coluna 'id' da tabela 'awards'
                    ->on('awards')
                    ->onDelete('cascade');

            $table->integer('purchasedOrReserved'); // comprado ou reservado - 1 comprado / 2 reservado
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prize_numbers_purchased');
    }
};
