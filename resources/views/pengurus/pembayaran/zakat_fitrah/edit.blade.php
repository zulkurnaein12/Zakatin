@extends('layouts.template_pengurus')

@section('content')
    <div class="pagetitle">
        <h1 class="mb-3">Zakat Fitrah</h1>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Edit Pembayaran</h4>
                <form enctype="multipart/form-data" class="bg-white shadow-sm p-3"
                    action="{{ route('pengurus.zakatfitrah.update', [$zakat->id]) }}" method="POST">
                    @csrf
                    @if (@$zakat)
                        @method('PUT')
                    @endif
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" name="nama" id="" required
                                aria-describedby="helpId" placeholder="Nama" value="{{ $zakat->nama ?? '' }}">
                            {{-- if error validate --}}
                            @error('nama')
                                <div class="text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-lg-2">
                                <label for="">Jenis Zakat</label>
                            </div>
                            <div class="col-lg-3">
                                <select disabled class="form-select" name="jenja" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option disabled> -- Choose --</option>
                                    <option selected value="Zakat Fitrah">Zakat Fitrah</option>
                                    <option disabled value="Zakat Maal">Zakat Maal</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Total</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" name="total_beras" id=""
                                required aria-describedby="helpId" placeholder="Total"
                                value="{{ $zakat->total_beras ?? '' }}">
                            @error('total')
                                <div class="text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" name="ket" id="" required
                                aria-describedby="helpId" placeholder="ket" value="{{ $zakat->ket ?? '' }}">
                            {{-- if error validate --}}
                            @error('ket')
                                <div class="text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <a class="btn btn-success" name="" id=""
                            href="{{ route('pengurus.zakatfitrah.index') }}">Back</a>
                    </div>

                </form>

            </div>
        </div>
    </section>
@endsection
