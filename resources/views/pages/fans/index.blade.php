@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-12 mb-5 mb-xl-0">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap justify-content-between mb-4">
                            <form action="{{ route('fans.index') }}" method="GET" class="d-flex justify-content-center mr-2 w-50">
                                <input type="text" class="form-control mr-2" placeholder="Filtrar por email" name="filter">
                                <button type="submit" class="btn btn-outline-default">Filtrar</button>
                            </form>
                            
                            <div class="dropdown">
                                <a class="btn" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-chevron-circle-down"></i> AÇÕES
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <vue-form-delete-all csrf="{{ csrf_token() }}" rota="{{ route('delete.all') }}" ></vue-form-delete-all>
                                    <a class="dropdown-item" href="{{ route('import.xml') }}">
                                        <i class="fas fa-file-import"></i> Importar XML
                                    </a>
                                    <a class="dropdown-item" href="{{ route('export.xml') }}">
                                        <i class="fas fa-file-export"></i> Exportar para Excel
                                    </a>
                                </div>
                            </div>
                        </div>
                        @if (session('warning'))
                            <div class="alert alert-warning animate__animated animate__bounceInDown" role="alert">
                                <strong>Aviso!</strong> {{ session('warning') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success animate__animated animate__bounceInDown" role="alert">
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
