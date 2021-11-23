@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-12 mb-5 mb-xl-0">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column justify-content-center">
                            
                            @if (session('erro'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>Erro!</strong> {{ session('erro') }}
                                </div>
                            @endif

                            <h1>Importe o arquivo</h1>
                            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="file" class="form-control-file" name="xml">
                                </div>
                                <button type="submit" class="btn btn-success">Importar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
