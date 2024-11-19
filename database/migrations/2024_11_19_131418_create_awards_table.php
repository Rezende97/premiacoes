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
        Schema::create('awards', function (Blueprint $table) {
            $table->id();
            $table->text('file_path');
            $table->text('descriptionAward');
            $table->string('prizeValue');
            $table->timestamp('dateTime')->nullable();
            $table->string('valueNumberPrize');
            $table->integer('freeOrPaid'); // opção se o premio é pago ou gratuito - 1 pago / 2 gratuito
            $table->integer('prizeOrCard'); // opção se é premiação ou Cartela - 1 premiaçãp / 2 cartela
            $table->integer('reservationPaymentDeadline'); // prazo para o pagamaneto da reserva do numero
            $table->integer('drawnNumber')->nullable(); // numero sorteado
            $table->integer('active')->default(0); // numero sorteado
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('awards');
    }
};
