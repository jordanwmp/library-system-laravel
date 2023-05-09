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
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->id();
            $table->date('data_emprestimo');
            $table->date('data_devoluao');
            $table->foreign('id_aluno')->references('id')->on('alunos');
            $table->foreign('id_livro')->references('id')->on('livros');
            $table->foreign('id_bibliotecario')->refernces('id')->on('bibliotecarios')
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emprestimos');
    }
};
