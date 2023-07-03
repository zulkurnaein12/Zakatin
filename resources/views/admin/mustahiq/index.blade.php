@extends('layouts.template')

@section('content')
    @include('sweetalert::alert')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-x1-3">
            <div class="col-auto d-none d-sm-block mb-3">
                <h3><strong>Mustahiq</strong></h3>
            </div>
            <div class="col-auto ms-auto text-end mt-n1">
                <a href="{{ route('admin.mustahiq.create') }}" class="btn btn-primary">Tambah Mustahiq</a>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Mustahiq</h4>
                        <br>
                        <div class="table-responsive">
                            <table id="myDataTable" class="table datatable">
                                <thead>
                                    <tr>
                                        <th th scope="col">No</th>
                                        <th th scope="col">Nama</th>
                                        <th th scope="col">Alamat</th>
                                        <th th scope="col">Jenis Kelamin</th>
                                        <th th scope="col">No Telpon</th>
                                        <th th scope="col">Kategori</th>
                                        <th th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mustahiqs as $mustahiq)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>{{ $mustahiq->nama }}</td>
                                            <td>{{ $mustahiq->alamat }}</td>
                                            <td>{{ $mustahiq->jenkel }}</td>
                                            <td>{{ $mustahiq->no_tlp }}</td>
                                            <td>{{ $mustahiq->kategori }}</td>
                                            <td>
                                                <a name="" id="" role="button" class="btn btn-success"
                                                    href="{{ route('admin.mustahiq.edit', $mustahiq->id) }}">
                                                    <i class="align-middle" data-feather="edit"></i></a>
                                                <a role="button"
                                                    href="{{ route('admin.mustahiq.destroy', $mustahiq->id) }}"
                                                    data-confirm-delete="true" class="btn btn-danger"><i
                                                        class="align-middle" data-feather="trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
