@extends('layouts.template')

@section('content')
    <div class="pagetitle">
        <h1 class="mb-3">Mustahiq</h1>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Tambah Mustahiq</h4>
                <form action="{{ route('admin.mustahiq.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Nama Penerima</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" name="nama" id="" required
                                aria-describedby="helpId" placeholder="Nama Penerima">
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
                                aria-describedby="helpId" placeholder="Alamat Penerima">
                            @error('alamat')
                                <div class="text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-2">
                            <label for="jenkel">Jenis Kelamin</label>
                        </div>
                        <div class="col-lg-10 mb-3">
                            <select class="form-select" name="jenkel" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option selected> -- Choose --</option>
                                <option value="LAKI-LAKI">LAKI-LAKI</option>
                                <option value="PEREMPUAN">PEREMPUAN</option>
                            </select>
                            @error('jenkel')
                                <div class="text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">No Telpon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" name="no_tlp" id="" required
                                aria-describedby="helpId" placeholder="No Telpon">
                            @error('no_tlp')
                                <div class="text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <label for="kategori">Kategori</label>
                        </div>
                        <div class="col-lg-10 mb-3">
                            <select class="form-select" name="kategori" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option selected> -- Choose --</option>
                                <option value="Fakir">Fakir</option>
                                <option value="Miskin">Miskin</option>
                                <option value="Amil">Amil</option>
                                <option value="Muallaf">Muallaf</option>
                                <option value="Gharim">Gharim</option>
                                <option value="Riqab">Riqab</option>
                                <option value="Fisabilillah">Fisabilillah</option>
                                <option value="Ibnu Sabil">Ibnu Sabil</option>
                            </select>
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
