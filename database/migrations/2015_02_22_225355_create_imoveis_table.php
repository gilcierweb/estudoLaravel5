<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImoveisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('imoveis', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('imovel_titulo_pt-br');
			$table->string('imovel_titulo_en');
			$table->string('imovel_titulo_es');
			$table->string('imovel_resumo_pt-br');
			$table->string('imovel_resumo_en');
			$table->string('imovel_resumo_es');
			$table->longText('imovel_descricao_pt-br');
			$table->longText('imovel_descricao_en');
			$table->longText('imovel_descricao_es');
			$table->string('imovel_telefone');
			$table->text('imovel_mapa');
			$table->string('imovel_video_url');
			$table->string('imovel_img_capa');
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
		Schema::drop('imoveis');
	}

}
