@extends('layouts.template_pengurus')

@section('content')
    @include('sweetalert::alert')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-x1-3">
            <div class="col-auto d-none d-sm-block mb-3">
                <h3><strong>Penyaluran Zakat Fitrah</strong></h3>
            </div>
            @php
                $totalKeseluruhan = $total;
            @endphp
            @foreach ($zakats as $zakat)
                @php
                    $totalKeseluruhan -= $zakat->total_beras; // Inisialisasi dengan nilai total keseluruhan awal
                @endphp
            @endforeach
            @if ($totalKeseluruhan >= 3)
                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('pengurus.penerimaanzakatfitrah.create') }}" class="btn btn-primary">Tambah
                        Penyaluran</a>
                </div>
            @else
                <div class="col-auto ms-auto text-end mt-n1">
                    <button class="btn btn-primary" disabled>Tambah Penyaluran</button>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Total zakat fitrah harus minimal 3 kg untuk menambahkan penyaluran baru.',
                        });
                    });
                </script>
            @endif
            {{-- <div class="col-auto ms-auto text-end mt-n1">
                <a href="{{ route('pengurus.penerimaanzakatfitrah.create') }}" class="btn btn-primary">Tambah
                    Penyaluran</a>
            </div> --}}
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
                                                    href="{{ route('pengurus.penerimaanzakatfitrah.edit', $zakat->id) }}">
                                                    <i class="align-middle" data-feather="edit"></i></a>
                                                <a role="button"
                                                    href="{{ route('pengurus.penerimaanzakatfitrah.destroy', $zakat->id) }}"
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
                                        <th colspan="6">Saldo Akhir</th>
                                        <td><strong>{{ $totalKeseluruhan }} Kg</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
