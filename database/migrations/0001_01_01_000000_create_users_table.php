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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('email', 50)->unique();
            $table->string('user_type');
            $table->timestamps();
        });

    }

    //  USUARIO:
//  id_usuario (INT, Primary Key): Identificador único do usuário. 
//  nome (VARCHAR(50)): Nome do usuário. 
//  email (VARCHAR(50), Unique): Endereço de e-mail único do usuário. 
//  tipo_usuario (ENUM('avaliador', 'representante')): Define o tipo de usuário 
//  (consumidor ou empresa). 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
