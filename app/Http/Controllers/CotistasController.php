<?php

namespace App\Http\Controllers;

use App\Models\RelacaoSNI;
use http\Env\Request;

class CotistasController extends Controller
{
    public function index(){
        $cotistas = [
            'Mackley',
            'Larissa',
            'Evaldo'
        ];
        return view('Cotistas.index', compact('cotistas'));
    }
    public function create(){
        return view('Cotistas.adicionaCotista');
    }

    public function store(Request $request){
        $cotista = new RelacaoSNI();
        $cotista->nome = $request->nome;
        $cotista->cod_sni = $request->cod_sni;
        $cotista->cota_revistas = $request->cota_revistas;
        $cotista->al_id = $request->al_id;

        var_dump($cotista->save());

    }
}
