@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-12 mb-5 mb-xl-0">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap justify-content-end mb-4">
                            <form action="{{ route('fans.index') }}" method="GET" class="d-flex justify-content-center mr-2 w-50">
                                <input type="text" class="form-control mr-2" placeholder="Filtrar por email" name="filter">
                                <button type="submit" class="btn btn-info">Filtrar</button>
                            </form>
                            <vue-form-delete-all csrf="{{ csrf_token() }}" rota="{{ route('delete.all') }}" >
                            </vue-form-delete-all>
                            <a class="btn btn-success" href="{{ route('import.xml') }}">
                                Importar XML
                            </a>
                            <a class="btn btn-primary" href="{{ route('export.xml') }}">
                                Exportar para Excel
                            </a>
                        </div>
                        @if (session('warning'))
                            <div class="alert alert-warning" role="alert">
                                <strong>Aviso!</strong> {{ session('warning') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                <strong>Sucesso!</strong> {{ session('success') }}
                            </div>
                        @endif
                        <x-tabela 
                            :items="$torcedores" 
                            :fields="[
                                'NOME', 
                                'CEP',
                                'CIDADE',
                                'UF',
                                'TELEFONE',
                                'EMAIL',
                                'STATUS',
                            ]"
                            :content-fildes="[
                                'name', 
                                'cep',
                                'city',
                                'uf',
                                'telephone',
                                'email',
                                'active',
                            ]"
                            prefix-resource="fans"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
