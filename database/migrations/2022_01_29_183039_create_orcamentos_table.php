<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrcamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('Numero_Orcamento');
            $table->string('Data');
            $table->string('Validade');
            $table->string('Garantia');
            $table->string('Forma_Pagamento');
            $table->string('Descricao');
//          $table->double('Valor');
            $table->double('Desconto');
            $table->double('Taxas');

            // $table->unsignedInteger('empresa_id');
            // $table->foreign('empresa_id')->references('id')->on('empresas');

            // $table->unsignedInteger('empresa_cliente_id');
            // $table->foreign('empresa_cliente_id')->references('id')->on('empresa__cliente');

            $table->foreignId('empresa_id')->constrained('empresas')->onDelete('cascade');
            $table->foreignId('empresa_cliente_id')->constrained('empresa__clientes')->onDelete('cascade');
          //$table->foreignId('produto_id')->constrained('produtos')->onDelete('cascade');
            //$table->integer('Quantidade');
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
        Schema::dropIfExists('orcamentos');
    }
}
