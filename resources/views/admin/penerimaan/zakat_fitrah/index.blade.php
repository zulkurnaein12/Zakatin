@extends('layouts.template')

@section('content')
    @include('sweetalert::alert')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-x1-3">
            <div class="col-auto d-none d-sm-block mb-3">
                <h3><strong>Penerimaan Zakat Fitrah</strong></h3>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Zakat Fitrah</h4>
                        <br>
                        <div class="table-responsive">
                            <table id="myDataTable" class="table datatable">
                                <thead>
                                    <tr>
                                        <th th scope="col">No</th>
                                        <th th scope="col">Nama Penerima</th>
                                        <th th scope="col">Tanggal Penyaluran</th>
                                        <th th scope="col">Jenis Zakat</th>
                                        <th th scope="col">Total Beras</th>
                                        <th th scope="col">Keterangan</th>
                                        <th th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $totalKeseluruhan = $total; // Inisialisasi dengan nilai total keseluruhan awal
                                    @endphp
                                    @foreach ($zakats as $zakat)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>{{ $zakat->mustahiqs->nama }}</td>
                                            <td>{{ $zakat->created_at->format('d M Y') }}</td>
                                            <td>{{ $zakat->jenja }}</td>
                                            <td>{{ $zakat->total_beras }} Kg</td>
                                            <td>{{ $zakat->ket }}</td>
                                            <td>
                                                <a name="" role="button" class="btn btn-success"
                                                    href="{{ route('admin.penerimaanberas.edit', $zakat->id) }}">
                                                    <i class="align-middle" data-feather="edit"></i></a>
                                                <a role="button"
                                                    href="{{ route('admin.penerimaanberas.destroy', $zakat->id) }}"
                                                    data-confirm-delete="true" class="btn btn-danger"><i
                                                        class="align-middle" data-feather="trash"></i></a>
                                            </td>
                                        </tr>
                                        @php
                                            $totalKeseluruhan -= $zakat->total_beras;
                                        @endphp
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="6">Total</th>
                                        <td><strong>{{ $totalKeseluruhan }} Kg</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
