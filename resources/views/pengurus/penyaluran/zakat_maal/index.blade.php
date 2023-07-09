@extends('layouts.template_pengurus')

@section('content')
    @include('sweetalert::alert')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-x1-3">
            <div class="col-auto d-none d-sm-block mb-3">
                <h3><strong>Zakat Maal</strong></h3>
            </div>
            <div class="col-auto ms-auto text-end mt-n1">
                <a href="{{ route('pengurus.penerimaanzakatmaal.create') }}" class="btn btn-primary">Tambah Penyaluran</a>
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
                                        <th th scope="col">Nama Penerima</th>
                                        <th th scope="col">Tanggal Penyaluran</th>
                                        <th th scope="col">Jenis Zakat</th>
                                        <th th scope="col">Total Uang</th>
                                        <th th scope="col">Keterangan</th>
                                        <th th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $totalKeseluruhan = $total; // Inisialisasi dengan nilai total keseluruhan awal
                                    @endphp
                                    @foreach ($zakatmaals as $zakatmaal)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>{{ $zakatmaal->mustahiqs->nama }}</td>
                                            <td>{{ $zakatmaal->created_at->format('d M Y') }}</td>
                                            <td>{{ $zakatmaal->jenja }}</td>
                                            <td>Rp {{ number_format($zakatmaal->total_uang, 2) }}</td>
                                            <td>{{ $zakatmaal->ket }}</td>
                                            <td>
                                                <a name="" role="button" class="btn btn-success"
                                                    href="{{ route('pengurus.penerimaanzakatmaal.edit', $zakatmaal->id) }}">
                                                    <i class="align-middle" data-feather="edit"></i></a>
                                                <a role="button"
                                                    href="{{ route('pengurus.penerimaanzakatmaal.destroy', $zakatmaal->id) }}"
                                                    data-confirm-delete="true" class="btn btn-danger"><i
                                                        class="align-middle" data-feather="trash"></i></a>
                                            </td>
                                        </tr>
                                        @php
                                            $totalKeseluruhan -= $zakatmaal->total_uang;
                                        @endphp
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="7">Total</th>
                                        <td><strong>Rp {{ number_format($totalKeseluruhan, 2) }}</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
