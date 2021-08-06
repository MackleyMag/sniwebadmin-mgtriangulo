@extends('layout')

@section('conteudo')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Cotistas da AL</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <a href="/cotistas/novo" type="button" class="btn btn-sm btn-outline-secondary" >Novo Cotista</a>
                </div>
            </div>
        </div>
        <h2>Listagem de Cotistas <i class="fas fa-edit"></i> <i class="fas fa-trash-alt"></i></h2>

        @if(!empty($mensagem))
            <div class="alert alert-sucess">
                {{$mensagem}}
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th scope="col">Código SNI</th>
                    <th scope="col">Nome Cotista</th>
                    <th scope="col">Quantidade das Cotas</th>
                    <th scope="col">Associação Local</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cotistas as $cotista)
                <tr>
                    <td>{{$cotista->cod_sni}}</td>
                    <td>{{$cotista->nome}}</td>
                    <td>{{$cotista->cota_revistas}}</td>
                    <td>{{$cotista->al_id}}</td>
                    <td>
                        <form method="post" action="/cotista/remover/{{$cotista->cod_sni}}">
                            @csrf
                            <button class="btn btn-danger"> <i class="fas fa-edit"></i> <i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
