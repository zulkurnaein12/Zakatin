@extends('layouts.template')

@section('content')
    @include('sweetalert::alert')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-x1-3">
            <div class="col-auto d-none d-sm-block mb-3">
                <h3><strong>Laporan Pembayaran Zakat</strong></h3>
            </div>
            <div class="col-auto ms-auto text-end mt-n1">
                <a href="{{ route('admin.pdf.generate') }}" class="btn btn-success">Cetak Laporan</a>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Zakat Fitrah Dan Zakat Maal</h4>
                        <br>
                        <div class="table-responsive">
                            <table id="myDataTable" class="table datatable">
                                <thead>
                                    <tr>
                                        <th th scope="col">No</th>
                                        <th th scope="col">Nama</th>
                                        <th th scope="col">Tanggal Penerimaan</th>
                                        <th th scope="col">Jenis Zakat</th>
                                        <th th scope="col">Total Beras</th>
                                        <th th scope="col">Total Uang</th>
                                        <th th scope="col">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($zakats as $zakat)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>{{ $zakat->nama }}</td>
                                            <td>{{ $zakat->created_at->format('d M Y') }}</td>
                                            <td>{{ $zakat->jenja }}</td>
                                            <td>
                                                @if ($zakat->total_beras)
                                                    {{ $zakat->total_beras }} Kg
                                                @else
                                                    0 Kg
                                                @endif
                                            </td>
                                            <td>Rp {{ number_format($zakat->total_uang, 2) }}</td>
                                            <td>{{ $zakat->ket }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="6">Total Beras Yang Terkumpu:</th>
                                        <td><strong>{{ $totalBeras }} Kg</strong></td>
                                    </tr>
                                    <tr>
                                        <th colspan="6">Total Uang Yang Terkumpu:</th>
                                        <td><strong>Rp
                                                {{ number_format($totalUang, 2) }}</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
