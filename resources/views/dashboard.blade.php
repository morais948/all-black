@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row d-flex justify-content-center">
            <div class="col-8 mb-5 mb-xl-0">
                <div class="card">
                    <div class="card-body">
                        <div id="carouselExampleSlidesOnly" class="carousel slide animate__animated animate__jackInTheBox" data-ride="carousel">
                            <div class="carousel-inner" style="max-height: 500px">
                                <div class="carousel-item active">
                                    <img src="{{ asset('assets/img/wallpapers/w1.png') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/wallpapers/w2.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/wallpapers/w3.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/wallpapers/w4.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/wallpapers/w5.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script>
        $('.carousel').carousel({
            interval: 2000
        })
    </script>
@endpush