<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RelacaoSNI extends Model{
    protected $table = 'relacao_sni';

    protected $fillable = ['nome', 'cod_sni', 'al_id', 'cota_revistas'];


}
