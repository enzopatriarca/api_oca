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
    public function up()
    {
        Schema::create('produtos__pedidos', function (Blueprint $table) {
            //$table->id();
            $table->foreignId('pedidos')->constrained()->cascadeOnDelete();
            $table->integer('idproduto');
            $table->string('nomeproduto');
            $table->integer('qtd_produtos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos__pedidos');
    }
};
