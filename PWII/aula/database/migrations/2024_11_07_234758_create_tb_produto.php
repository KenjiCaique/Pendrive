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
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100)->nullable();
            $table->unsignedBigInteger('id_categoria')->nullable();
            $table->string('descricao', 200)->nullable();
            $table->decimal('preco', 8, 2)->nullable(); 
            $table->integer('quantidade_em_estoque')->nullable();
            $table->date('data_cadastro')->nullable();
            $table->timestamps();

            $table->foreign('id_categoria')->references('id')->on('categoria')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto');
    }
};
