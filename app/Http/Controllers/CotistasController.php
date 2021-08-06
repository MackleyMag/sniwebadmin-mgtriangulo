<?php

namespace App\Http\Controllers;

use App\Models\RelacaoSNI;
use Illuminate\Http\Request;

class CotistasController extends Controller
{
    public function index(Request $request){
        $cotistas = RelacaoSNI::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');

        return view('Cotistas.index', compact('cotistas', 'mensagem'));
    }
    public function create(){
        return view('Cotistas.adicionaCotista');
    }

    public function store(Request $request){

//        $cotista = new RelacaoSNI();
//        $cotista->nome = $request->nome;
//        $cotista->cod_sni = $request->cod_sni;
//        $cotista->cota_revistas = $request->cota_revistas;
//        $cotista->al_id = $request->al_id;
//
//        var_dump($cotista->save());

//        Ou ainda pode ser usado uma forma mais sucinta ainda:
//        $cotista = RelacaoSNI::create($request->all());

        $cotista = RelacaoSNI::create([
            'nome'      => $request->nome,
            'cod_sni'   => $request->cod_sni,
            'al_id'     => $request->al_id,
            'cota_revistas'=> $request->cota_revistas
        ]);

        $request->session()
            ->flash(
                'mensagem',
                "Cotista {$cotista->nome} adicionado com sucesso"
            );
        return redirect('/cotistas');
    }
}
