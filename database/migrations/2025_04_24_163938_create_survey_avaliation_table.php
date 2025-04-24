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
        Schema::create('survey_avaliation', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_criteria')->unsigned();
            $table->float('avaliation');
            $table->bigInteger('id_representante')->unsigned();
            $table->timestamps();
            //  NOTA_AVALIACAO:
//   id_avaliacao (INT, Foreign Key): Chave estrangeira referenciando a tabela 
//  AVALIACAO. 
//  id_criterio (INT, Foreign Key): Chave estrangeira referenciando a tabela 
//  CRITERIO. 
//  nota (DECIMAL(3, 1)): Nota atribuída ao critério na avaliação (escala de 0 a 
//  10 com incrementos de 0.5). 
//  PRIMARY KEY (id_avaliacao, id_criterio): Define a chave primária composta, 
//  garantindo que cada critério receba apenas uma nota por avaliação. 

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey_avaliation');
    }
};

// /**
//  CATEGORIA:
//   id_categoria (INT, Primary Key): Identificador único da categoria do produto. 
//  nome_categoria (VARCHAR(50), Unique): Nome da categoria (ex: 
//  Eletrônicos, Livros, Vestuário). 
//  SUBCATEGORIA:
//   id_subcategoria (INT, Primary Key): Identificador único da subcategoria do 
//  produto. 
//  Sumário ← clique para voltar para
//  id_categoria (INT, Foreign Key): Chave estrangeira referenciando a tabela 
//  CATEGORIA. 
//  nome_subcategoria (VARCHAR(50), Unique): Nome da subcategoria (ex: 
//  Smartphones dentro de Eletrônicos). 
//  PRODUTO:
//   id_produto (INT, Primary Key): Identificador único do produto. 
//  id_representante (INT, Foreign Key): Chave estrangeira referenciando o 
//  id_usuario de um representante na tabela USUARIO. 
//  id_categoria (INT, Foreign Key): Chave estrangeira referenciando a tabela 
//  CATEGORIA. 
//  id_subcategoria (INT, Foreign Key): Chave estrangeira referenciando a tabela 
//  SUBCATEGORIA. 
//  nome_produto (VARCHAR(255)): Nome do produto. 
//  nome_fabricante (VARCHAR(100)): Nome da empresa fabricante. 
//  codigo_barras (VARCHAR(13), Unique): Código de barras do produto 
//  (formato EAN-13). 
//  preco_sugerido (DECIMAL(10, 2)): Preço sugerido do produto. 
//  descricao_produto (TEXT): Descrição detalhada do produto. 
//  CRITERIO:
//   id_criterio (INT, Primary Key): Identificador único do critério de avaliação. 
//  nome_criterio (VARCHAR(100), Unique): Nome do critério (ex: Qualidade, 
//  Durabilidade, Custo-Benefício). 
//  AVALIACAO:
//   id_avaliacao (INT, Primary Key): Identificador único da avaliação. 
//  id_avaliador (INT, Foreign Key): Chave estrangeira referenciando o 
//  id_usuario de um avaliador na tabela USUARIO. 
//  Sumário ← clique para voltar para
//  id_produto (INT, Foreign Key): Chave estrangeira referenciando a tabela 
//  PRODUTO. 
//  comentario (TEXT): Comentário textual da avaliação. 
//  data_avaliacao (DATETIME): Data e hora da avaliação. 
//  NOTA_AVALIACAO:
//   id_avaliacao (INT, Foreign Key): Chave estrangeira referenciando a tabela 
//  AVALIACAO. 
//  id_criterio (INT, Foreign Key): Chave estrangeira referenciando a tabela 
//  CRITERIO. 
//  nota (DECIMAL(3, 1)): Nota atribuída ao critério na avaliação (escala de 0 a 
//  10 com incrementos de 0.5). 
//  PRIMARY KEY (id_avaliacao, id_criterio): Define a chave primária composta, 
//  garantindo que cada critério receba apenas uma nota por avaliação.
//   REPLICA:
//   id_replica (INT, Primary Key): Identificador único da réplica. 
//  id_avaliacao (INT, Foreign Key): Chave estrangeira referenciando a tabela 
//  AVALIACAO. 
//  id_representante (INT, Foreign Key): Chave estrangeira referenciando o 
//  id_usuario de um representante na tabela USUARIO. 
//  texto_replica (TEXT): Texto da réplica do representante. 
//  data_replica (DATETIME): Data e hora da réplica
// 
//  */