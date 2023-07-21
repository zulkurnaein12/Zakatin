@extends('layouts.template_pengurus')

@section('content')
    <div class="pagetitle">
        <h1 class="mb-3">Zakat Fitrah</h1>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Penyaluran</h4>
                @php
                    $totalKeseluruhan = $total;
                @endphp
                @foreach ($zakats as $zakat)
                    @php
                        $totalKeseluruhan -= $zakat->total_beras;
                    @endphp
                @endforeach
                <form action="{{ route('pengurus.penerimaanzakatfitrah.store') }}" method="post" enctype="multipart/form-data"
                    onsubmit="return handleSubmit()">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-lg-2">
                            <label for="mustahiq_id">Mustahiq</label>
                        </div>
                        <div class="col-lg-10">
                            <select class="form-select" name="mustahiq_id" id="mustahiq_id"
                                aria-label="Floating label select example">
                                <option value="">Pilih Penerima</option>
                                @foreach ($mustahiqs as $mustahiq)
                                    <option value="{{ $mustahiq->id }}">{{ $mustahiq->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-2">
                            <label for="jenja">Jenis Zakat</label>
                        </div>
                        <div class="col-lg-10">
                            <select class="form-select" name="jenja" id="jenja"
                                aria-label="Floating label select example">
                                <option value="Zakat Fitrah">Zakat Fitrah</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="total_beras" class="col-sm-2 col-form-label">Total</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="total_beras" id="total_beras" required
                                aria-describedby="helpId" placeholder="Total">
                            @error('total_beras')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="ket" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="ket" id="ket"
                                aria-describedby="helpId" placeholder="Keterangan">
                            @error('ket')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <a class="btn btn-success" name="" id=""
                            href="{{ route('pengurus.penerimaanzakatfitrah.index') }}">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function handleSubmit() {
            const totalKeseluruhan = {!! json_encode($totalKeseluruhan) !!};
            const inputText = document.getElementById('total_beras').value;
            const totalBeras = parseFloat(inputText);

            if (isNaN(totalBeras)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Total beras harus berupa angka!',
                });
                return false; // prevent form submission
            }

            if (totalBeras > totalKeseluruhan) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Total beras melebihi total keseluruhan!',
                });
                return false; // prevent form submission
            } else {
                return true; // allow form submission
            }
        }
    </script>
@endsection
