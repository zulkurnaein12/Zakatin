@extends('layouts.template')

@section('content')
    <div class="pagetitle">
        <h1 class="mb-3">Mustahiq</h1>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Tambah Mustahiq</h4>
                <form enctype="multipart/form-data" class="bg-white shadow-sm p-3"
                    action="{{ route('admin.mustahiq.update', [$mustahiq->id]) }}" method="POST">
                    @csrf
                    @if (@$mustahiq)
                        @method('PUT')
                    @endif
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Nama Penerima</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" name="nama" id="" required
                                aria-describedby="helpId" placeholder="Nama Penerima" value="{{ $mustahiq->nama ?? '' }}">
                            {{-- if error validate --}}
                            @error('nama')
                                <div class="text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat Penerima</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" name="alamat" id="" required
                                aria-describedby="helpId" placeholder="Alamat Penerima"
                                value="{{ $mustahiq->alamat ?? '' }}">
                            {{-- if error validate --}}
                            @error('alamat')
                                <div class="text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    @php
                        $jenkel = ['LAKI-LAKI', 'PEREMPUAN'];
                    @endphp
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-lg-3">
                                <label for="jenkel">Jenis Kelamin</label>
                            </div>
                            <div class="col-lg-9">
                                <select class="form-select" name="jenkel" aria-label="Default select example"
                                    value="{{ $mustahiq->jenkel ?? '' }}">
                                    @foreach ($jenkel as $jen)
                                        <option value="{{ $jen }}"
                                            {{ $jen == $mustahiq->jenkel ? 'selected' : '' }}>
                                            {{ $jen }}</option>
                                    @endforeach
                                </select>
                                {{-- if error validate --}}
                                @error('jenkel')
                                    <div class="text-danger">{{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">No Telpon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" name="no_tlp" id="" required
                                aria-describedby="helpId" placeholder="No Telpon" value="{{ $mustahiq->no_tlp ?? '' }}">
                            {{-- if error validate --}}
                            @error('no_tlp')
                                <div class="text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    @php
                        $kategori = ['Fakir', 'Miskin', 'Amil', 'Muallaf', 'Gharim', 'Riqab', 'Fisabilillah', 'Ibnu Sabil'];
                    @endphp
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3">
                                <label for="kategori">Kategori</label>
                            </div>
                            <div class="col-lg-9 mb-3">
                                <select class="form-select" name="kategori" aria-label="Default select example"
                                    value="{{ $mustahiq->kategori ?? '' }}">
                                    @foreach ($kategori as $kat)
                                        <option value="{{ $kat }}"
                                            {{ $kat == $mustahiq->kategori ? 'selected' : '' }}>
                                            {{ $kat }}</option>
                                    @endforeach
                                </select>
                                {{-- if error validate --}}
                                @error('kategori')
                                    <div class="text-danger">{{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                            <a class="btn btn-success" name="" id=""
                                href="{{ route('admin.mustahiq.index') }}">Back</a>
                        </div>

                </form>

            </div>
        </div>
    </section>
@endsection
