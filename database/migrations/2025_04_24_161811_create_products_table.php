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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_representante');
            $table->bigInteger('id_categoria');
            $table->bigInteger('id_subcategoria');
            $table->string('nome_produto', 255);
            $table->string('nome_fabricante', 100);
            $table->string('codigo_barras', 13);
            $table->float('preco_sugerido');
            $table->string('descricao_produto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
