@extends('layouts.template')

@section('content')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-x1-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Dashboard</strong></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-o">
                                <h5 class="card-title">Pengurus</h5>
                            </div>
                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="users"></i>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-1 mb-3">{{ $pengurus }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-o">
                                <h5 class="card-title">Muzakki</h5>
                            </div>
                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="users"></i>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-1 mb-3">{{ $muzakki }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-o">
                                <h5 class="card-title">Mustahiq</h5>
                            </div>
                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="users"></i>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-1 mb-3">{{ $mustahiq }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-o">
                                <h5 class="card-title">Zakat Fitrah Masuk</h5>
                            </div>
                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="package"></i>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-1 mb-3">{{ $zakatfit }} Kg</h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-o">
                                <h5 class="card-title">Zakat Fitrah Keluar</h5>
                            </div>
                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="arrow-up-right"></i>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-1 mb-3">{{ $penerimaanberas }} Kg</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-o">
                                <h5 class="card-title">Zakat Maal Masuk</h5>
                            </div>
                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="dollar-sign"></i>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-1 mb-3">Rp {{ $zakatmaal }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-o">
                                <h5 class="card-title">Zakat Maal Keluar</h5>
                            </div>
                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="arrow-up-right"></i>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-1 mb-3">Rp {{ number_format($penerimaanuang, 2) }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-o">
                                <h5 class="card-title">Saldo Akhir Zakat Fitrah</h5>
                            </div>
                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="package"></i>
                                </div>
                            </div>
                        </div>
                        @php
                            $totalKeseluruhan = $zakatfit;
                        @endphp
                        @foreach ($zakats as $zakat)
                            @php
                                $totalKeseluruhan -= $zakat->total_beras; // Inisialisasi dengan nilai total keseluruhan awal
                            @endphp
                        @endforeach
                        <h5 class="mt-1 mb-3">{{ $totalKeseluruhan }} Kg</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-o">
                                <h5 class="card-title">Saldo Akhir Zakat Maal</h5>
                            </div>
                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="dollar-sign"></i>
                                </div>
                            </div>
                        </div>
                        @php
                            $totalKeseluruhan2 = $zakatmaal;
                        @endphp
                        @foreach ($zakats as $zakat)
                            @php
                                $totalKeseluruhan2 -= $zakat->total_uang; // Inisialisasi dengan nilai total keseluruhan awal
                            @endphp
                        @endforeach
                        <h5 class="mt-1 mb-3">Rp {{ number_format($totalKeseluruhan2, 2) }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
