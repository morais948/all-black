@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row animate__animated animate__bounceInDown">
            <div class="col-12 mb-5 mb-xl-0">
                <div class="card">
                    <div class="card-body d-flex flex-column justify-content-center">
                        @if (session('success'))
                            <div class="alert alert-success animate__animated animate__bounceInDown" role="alert">
                                <strong>Sucesso!</strong> {{ session('success') }}
                            </div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning animate__animated animate__bounceInDown" role="alert">
                                <strong>Opa!</strong> {{ session('warning') }}
                            </div>
                        @endif
                        <form action="{{ route('send.email') }}" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-12 mt-2">
                                    <label for="exampleFormControlTextarea1">Mensagem</label>
                                    <textarea name="msg" class="form-control w-100" id="exampleFormControlTextarea1" rows="15" cols="120"></textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-outline-default mt-2">
                                Enviar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
