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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaksi_id')
        ->constrained('transaksi_penjualan')
        ->cascadeOnDelete();



        $table->string('metode_pembayaran');


        $table->integer('jumlah_bayar');


        $table->enum('status_pembayaran',[
            'Lunas',
            'Belum Lunas'
        ]);
        
        $table->date('tanggal_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
