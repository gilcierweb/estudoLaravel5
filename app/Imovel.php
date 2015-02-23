<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'imoveis';

    protected $fillable = [
        'imovel_titulo_pt-br',
        'imovel_titulo_en',
        'imovel_titulo_es',
        'imovel_resumo_pt-br',
        'imovel_resumo_en',
        'imovel_resumo_es',
        'imovel_descricao_pt-br',
        'imovel_descricao_en',
        'imovel_descricao_es',
        'imovel_telefone',
        'imovel_mapa',
        'imovel_video_url',
        'imovel_img_capa',
    ];

}
