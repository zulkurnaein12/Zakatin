@extends('layouts.template')

@section('content')
    @include('sweetalert::alert')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-x1-3">
            <div class="col-auto d-none d-sm-block mb-3">
                <h3><strong>Pengurus</strong></h3>
            </div>
            <div class="col-auto ms-auto text-end mt-n1">
                <a href="{{ route('admin.user.create') }}" class="btn btn-primary">Tambah Pengurus</a>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Pengurus</h4>
                        <div class="table-responsive">
                            <table id="myDataTable" class="table datatable">
                                <thead>
                                    <tr>
                                        <th th scope="col">No</th>
                                        <th th scope="col">Nama</th>
                                        <th th scope="col">Avatar</th>
                                        <th th scope="col">Alamat</th>
                                        <th th scope="col">Email</th>
                                        <th th scope="col">Jabatan</th>
                                        <th th scope="col">No Telepon</th>
                                        <th th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>
                                                @if ($user->avatar)
                                                    <img src="{{ asset('storage/' . $user->avatar) }}" width="70px" />
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td>{{ $user->alamat }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->jabatan }}</td>
                                            <td>{{ $user->no_tlp }}</td>
                                            <td>
                                                <a name="" id="" role="button" class="btn btn-success"
                                                    href="{{ route('admin.user.edit', $user->id) }}">
                                                    <i class="align-middle" data-feather="edit"></i></a>
                                                <a role="button" href="{{ route('admin.user.destroy', $user->id) }}"
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
