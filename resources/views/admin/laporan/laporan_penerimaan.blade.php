@extends('layouts.template')

@section('content')
    @include('sweetalert::alert')
    <div class="container-fluid p-0">
        <!-- Add filter form -->
        <div class="col-auto d-none d-sm-block mb-3">
            <h3><strong>Laporan Penyaluran Zakat</strong></h3>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.admin.filter') }}" method="GET" class="row g-3">
                    <div class="col-sm-2">
                        <label for="start_date" class="form-label">Tanggal Awal:</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="date" id="start_date" name="start_date" class="form-control">
                    </div>
                    <div class="col-sm-2">
                        <label for="end_date" class="form-label">Tanggal Akhir:</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="date" id="end_date" name="end_date" class="form-control">
                    </div>
                    <div class="col-2 col-sm-1">
                        <button type="submit" class="btn btn-primary btn-block">Filter</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- End of filter form -->

        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Zakat Fitrah Dan Zakat Maal</h4>
                        <div class="col-auto ms-auto text-end mt-n1">
                            <a href="{{ route('admin.admin.pdf.export') }}" class="btn btn-success">Cetak Laporan</a>
                        </div>
                        <br>
                        <div class="table-responsive">
                            <table id="myDataTable" class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Penerima</th>
                                        <th scope="col">Tanggal Penyaluran</th>
                                        <th scope="col">Jenis Zakat</th>
                                        <th scope="col">Total Beras</th>
                                        <th scope="col">Total Uang</th>
                                        <th scope="col">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $totalKeseluruhanBeras = $totalBeras;
                                        $totalKeseluruhanUang = $totalUang; // Inisialisasi dengan nilai total keseluruhan awal
                                    @endphp
                                    @foreach ($zakats as $zakat)
                                        @php
                                            // Convert created_at to date string for comparison
                                            $tanggalPenyaluran = $zakat->created_at->format('Y-m-d');
                                        @endphp

                                        @if (
                                            (empty(request('start_date')) || $tanggalPenyaluran >= request('start_date')) &&
                                                (empty(request('end_date')) || $tanggalPenyaluran <= request('end_date')))
                                            <tr>
                                                <td scope="row">{{ $loop->iteration }}</td>
                                                <td>{{ $zakat->mustahiqs->nama }}</td>
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
                                            @php
                                                $totalKeseluruhanBeras -= $zakat->total_beras;
                                                $totalKeseluruhanUang -= $zakat->total_uang;
                                            @endphp
                                        @endif
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="6">Saldo Akhir Beras</th>
                                        <td><strong>{{ $totalKeseluruhanBeras }} Kg</strong></td>
                                    </tr>
                                    <tr>
                                        <th colspan="6">Saldo Akhir Uang</th>
                                        <td><strong>Rp {{ number_format($totalKeseluruhanUang, 2) }}</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
