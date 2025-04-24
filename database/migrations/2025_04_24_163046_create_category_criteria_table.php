<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('category_criteria', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_categoria');
            $table->bigInteger('id_criterio');
            $table->boolean('obrigatorio');
            $table->string('descricao_tooltip')->nullable();
            $table->timestamps();
            // CRITERIO_CATEGORIA:
            //   id_categoria (INT, Foreign Key): Chave estrangeira referenciando a tabela 
//  CATEGORIA. 
//  id_criterio (INT, Foreign Key): Chave estrangeira referenciando a tabela 
//  CRITERIO. 
//  obrigatorio (BOOLEAN): Indica se o critério é obrigatório para a categoria. 
//  descricao_tooltip (TEXT, Nullable): Texto de explicação para o tooltip do 
//  critério (para critérios opcionais). 
//  PRIMARY KEY (id_categoria, id_criterio): Define a chave primária composta 
//  para garantir que cada critério seja associado a uma categoria apenas uma 
//  vez. 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_criteria');
    }
};
