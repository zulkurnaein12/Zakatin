@extends('layouts.template_pengurus')

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
                                <h5 class="card-title">Zakat Fitrah Masuk</h5>
                            </div>
                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="dollar-sign"></i>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-1 mb-3">{{ $zakatfit }} kg</h5>
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
                        <h5 class="mt-1 mb-3">Rp {{ number_format($zakatmaal, 2) }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-o">
                                <h5 class="card-title">Penyaluran Zakat Fitrah</h5>
                            </div>
                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="dollar-sign"></i>
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
                                <h5 class="card-title">Penyaluran Zakat Maal</h5>
                            </div>
                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <i class="align-middle" data-feather="dollar-sign"></i>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-1 mb-3">Rp {{ number_format($penerimaanuang, 2) }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
