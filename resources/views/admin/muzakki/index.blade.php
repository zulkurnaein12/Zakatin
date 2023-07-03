@extends('layouts.template')

@section('content')
    @include('sweetalert::alert')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-x1-3">
            <div class="col-auto d-none d-sm-block mb-3">
                <h3><strong>Muzakki</strong></h3>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Muzakki</h4>
                        <br>
                        <div class="table-responsive">
                            <table id="myDataTable" class="table datatable">
                                <thead>
                                    <tr>
                                        <th th scope="col">No</th>
                                        <th th scope="col">Nama</th>
                                        <th th scope="col">Alamat</th>
                                        <th th scope="col">Email</th>
                                        <th th scope="col">No Telepon</th>
                                        <th th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->alamat }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->no_tlp }}</td>
                                            <td>
                                                <a role="button" href="{{ route('admin.muzakki.destroy', $user->id) }}"
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
