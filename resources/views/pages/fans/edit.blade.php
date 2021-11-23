@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row animate__animated animate__bounceInDown">
            <div class="col-12 mb-5 mb-xl-0">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('fans.update', $fan->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-12 col-md-4 mt-2">
                                    <label for="">Nome</label>
                                    <input type="text" class="form-control" placeholder="Nome" name="name" value="{{ old('name') ?? $fan->name }}">
                                </div>
                                <div class="col-12 col-md-4 mt-2">
                                    <label for="">Documento</label>
                                    <input type="text" class="form-control" placeholder="Documento" name="document" value="{{ old('document') ?? $fan->document }}">
                                </div>
                                <div class="col-12 col-md-4 mt-2">
                                    <label for="">Cep</label>
                                    <input type="text" class="form-control" placeholder="Cep" name="cep" value="{{ old('cep') ?? $fan->cep }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-4 mt-2">
                                    <label for="">Endereço</label>
                                    <input type="text" class="form-control" placeholder="Endereço" name="address" value="{{ old('address') ?? $fan->address }}">
                                </div>
                                <div class="col-12 col-md-4 mt-2">
                                    <label for="">Bairro</label>
                                    <input type="text" class="form-control" placeholder="Bairro" name="district" value="{{ old('district') ?? $fan->district }}">
                                </div>
                                <div class="col-12 col-md-4 mt-2">
                                    <label for="">Cidade</label>
                                    <input type="text" class="form-control" placeholder="Cidade" name="city" value="{{ old('city') ?? $fan->city }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-4 mt-2">
                                    <label for="">UF</label>
                                    <input type="text" class="form-control" placeholder="UF" name="uf" value="{{ old('uf') ?? $fan->uf }}">
                                </div>
                                <div class="col-12 col-md-4 mt-2">
                                    <label for="">Telefone</label>
                                    <input type="text" class="form-control" placeholder="Telefone" name="telephone" value="{{ old('telephone') ?? $fan->telephone }}">
                                </div>
                                <div class="col-12 col-md-4 mt-2">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') ?? $fan->email }}">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-12 text-danger">
                                    <h3 class="ml-1">Ativo</h3>
                                    <label class="custom-toggle">
                                        <input type="checkbox" {{ $fan->active == 1 ? 'checked' : '' }} name="active">
                                        <span class="custom-toggle-slider rounded-circle"></span>
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-outline-default">
                                Atualizar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
