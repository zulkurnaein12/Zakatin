@extends('layouts.template')

@section('content')
    <div class="pagetitle">
        <h1 class="mb-3">Pengurus</h1>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Tambah Pengurus</h4>
                <form action="{{ route('admin.user.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" name="name" id="" required
                                aria-describedby="helpId" placeholder="Username">
                            {{-- if error validate --}}
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputText" name="email" id="" required
                                aria-describedby="helpId" placeholder="Email" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Avatar</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" id="" name="avatar"
                                value="{{ old('avatar') }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" name="alamat" id="" required
                                aria-describedby="helpId" placeholder="Alamat" value="{{ old('alamat') }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" name="jabatan" id="" required
                                aria-describedby="helpId" placeholder="Jabatan" value="{{ old('jabatan') }}">
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">No Telpon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" name="no_tlp" id="" required
                                aria-describedby="helpId" placeholder="No Telpon" value="{{ old('no_tlp') }}">
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputText" name="password" id=""
                                required aria-describedby="helpId" placeholder="Password">
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <a class="btn btn-success" name="" id=""
                            href="{{ route('admin.user.index') }}">Back</a>
                    </div>

                </form>

            </div>
        </div>
    </section>
@endsection
