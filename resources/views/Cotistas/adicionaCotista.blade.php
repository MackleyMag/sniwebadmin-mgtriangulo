@extends('layout')

@section('conteudo')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Cotistas da AL</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar"></span>
                    This week
                </button>
            </div>
        </div>
        <h2>Formulário de Novo cotista</h2>
        <form>
            @csrf
            <div class="row">
                <div class="form-group col-md-8">
                    <label for="nome">Nome Completo</label>
                    <input type="text" class="form-control" id="nome" name="nome" aria-describedby="nomeHelp" placeholder="Digite um Nome">
                    <small id="nomeHelp" class="form-text text-muted">
                        Digite o nome completo do Associado. Este nome será visto apenas por usuários autorizados do Nucleo e sua AL
                    </small>
                </div>
                <div class="form-group col-md-4">
                    <label for="cod_sni">Associação Local</label>
                    <input type="text" class="form-control" id="cod_sni" disabled value="Associação dos Jovens Uberlandia">
                    <input type="hidden" name="al_id" id="al_id" value="1">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="cod_sni">Código SNI</label>
                    <input type="number" class="form-control" id="cod_sni" placeholder="Informe o numero SNI do associado">
                </div>
                <div class="form-group col-md-6">
                    <label for="cota_revistas">Cota de Revistas</label>
                    <input type="number" class="form-control" id="cota_revistas" placeholder="Informe o numero SNI do associado">
                </div>
            </div>
            <hr>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </main>
@endsection
