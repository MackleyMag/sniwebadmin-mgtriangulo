<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaCotistas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'nucleo', function (Blueprint $table){
            $table->unsignedBigInteger('id', 'true');
            $table->string('titulo_n');
            $table->enum('status',[1,0]);
            $table->timestamps();
        });

        Schema::create('associacao_local', function (Blueprint $table){
            $table->unsignedBigInteger('id','true');
            $table->string('titulo_al');
            $table->enum('status',[1,0]);
            $table->unsignedBigInteger('nucleo_id');
            $table->foreign('nucleo_id')
                ->references('id')
                ->on('nucleo')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->timestamps();
        } );

        Schema::create( 'relacao_sni', function (Blueprint $table){
            $table->string('nome', 150);
            $table->integer('cod_sni', false, true);
            $table->integer('cota_revistas');
            $table->unsignedBigInteger('al_id');

            $table->foreign('al_id')
                ->references('id')
                ->on('associacao_local')
                ->onUpdate('cascade')
                ->onDelete('restrict');
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
        Schema::drop('tb_relacao_sni');
        Schema::drop('tb_associacao_local');
        Schema::drop('tb_nucleo');
    }
}
