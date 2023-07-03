@extends('layouts.template_pengurus')

@section('content')
    @include('sweetalert::alert')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-x1-3">
            <div class="col-auto d-none d-sm-block mb-3">
                <h3><strong>Zakat Maal</strong></h3>
            </div>
            <div class="col-auto ms-auto text-end mt-n1">
                <a href="{{ route('pengurus.zakatmaal.create') }}" class="btn btn-primary">Tambah Pembayaran</a>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Zakat Maal</h4>
                        <br>
                        <div class="table-responsive">
                            <table id="myDataTable" class="table datatable">
                                <thead>
                                    <tr>
                                        <th th scope="col">No</th>
                                        <th th scope="col">Nama</th>
                                        <th th scope="col">Tanggal Penerimaan</th>
                                        <th th scope="col">Jenis Zakat</th>
                                        <th th scope="col">Total</th>
                                        <th th scope="col">Keterangan</th>
                                        <th th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($zakats as $zakat)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>{{ $zakat->nama }}</td>
                                            <td>{{ $zakat->created_at->format('d M Y') }}</td>
                                            <td>{{ $zakat->jenja }}</td>
                                            <td>Rp {{ number_format($zakat->total_uang, 2) }}</td>
                                            <td>{{ $zakat->ket }}</td>
                                            <td>
                                                <a name="" role="button" class="btn btn-success"
                                                    href="{{ route('pengurus.zakatmaal.edit', $zakat->id) }}">
                                                    <i class="align-middle" data-feather="edit"></i></a>

                                                <a role="button"
                                                    href="{{ route('pengurus.zakatmaal.destroy', $zakat->id) }}"
                                                    data-confirm-delete="true" class="btn btn-danger"><i
                                                        class="align-middle" data-feather="trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="6">Total</th>
                                        <td><strong>Rp {{ number_format($total, 2) }}</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
