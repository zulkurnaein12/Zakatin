@extends('layouts.template_pengurus')

@section('content')
    <div class="pagetitle">
        <h1 class="mb-3">Zakat Maal</h1>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form edit Penyaluran</h4>
                <form enctype="multipart/form-data" class="bg-white shadow-sm p-3"
                    action="{{ route('pengurus.penerimaanzakatmaal.update', [$zakat->id]) }}" method="POST">
                    @csrf
                    @if (@$zakat)
                        @method('PUT')
                    @endif
                    <div class="row mb-3">
                        <div class="col-lg-2">
                            <label for="mustahiq_id">Mustahiq</label>
                        </div>
                        <div class="col-lg-10">
                            <select class="form-select" name="mustahiq_id" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option value="">Pilih Penerima</option>
                                @foreach ($mustahiqs as $mustahiq)
                                    <option value="{{ $mustahiq->id }}"
                                        {{ $mustahiq->id == $zakat->mustahiq_id ? 'selected' : '' }}>
                                        {{ $mustahiq->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-2">
                            <label for="jenis_zakat">Jenis Zakat</label>
                        </div>
                        <div class="col-lg-10">
                            <select class="form-select" name="jenja" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option disabled> -- Choose --</option>
                                <option disabled>Zakat Fitrah</option>
                                <option selected value="Zakat Maal">Zakat Maal</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Total</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" name="total_uang" id=""
                                required aria-describedby="helpId" placeholder="Total"
                                value="{{ $zakat->total_uang ?? '' }}">
                            @error('total')
                                <div class="text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" name="ket" id=""
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
                            href="{{ route('pengurus.penerimaanzakatmaal.index') }}">Back</a>
                    </div>

                </form>

            </div>
        </div>
    </section>
@endsection
