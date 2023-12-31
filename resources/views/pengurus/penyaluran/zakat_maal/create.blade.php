@extends('layouts.template_pengurus')

@section('content')
    <div class="pagetitle">
        <h1 class="mb-3">Zakat Maal</h1>
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
                        $totalKeseluruhan -= $zakat->total_uang;
                    @endphp
                @endforeach
                <form action="{{ route('pengurus.penerimaanzakatmaal.store') }}" method="post" enctype="multipart/form-data"
                    onsubmit="return handleSubmit()">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-lg-2">
                            <label for="mustahiq_id">Mustahiq</label>
                        </div>
                        <div class="col-lg-10">
                            <select class="form-select" name="mustahiq_id" id="floatingSelect"
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
                            <label for="jenis_zakat">Jenis Zakat</label>
                        </div>
                        <div class="col-lg-10">
                            <select class="form-select" name="jenja" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option value="Zakat Maal">Zakat Maal</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Total</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" name="total_uang" id=""
                                required aria-describedby="helpId" placeholder="Total">
                            @error('total_uang')
                                <div class="text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" name="ket" id=""
                                aria-describedby="helpId" placeholder="ket">
                            {{-- if error validate --}}
                            @error('ket')
                                <div class="text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <a class="btn btn-success" name="" id=""
                            href="{{ route('pengurus.penerimaanzakatmaal.index') }}">Back</a>
                    </div>

                </form>

            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function handleSubmit() {
            const totalKeseluruhan = {!! json_encode($totalKeseluruhan) !!};
            const inputText = document.getElementById('inputText').value;
            const totalUang = parseFloat(inputText);
            const submitBtn = document.getElementById('submitBtn');

            if (isNaN(totalUang) || totalUang <= 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Total uang harus berupa angka positif!',
                });
                return false; // prevent form submission
            }

            if (totalUang > totalKeseluruhan) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Total uang melebihi total keseluruhan!',
                });
                return false; // prevent form submission
            } else {
                submitBtn.disabled = true; // disable submit button to prevent multiple submissions
                return true; // allow form submission
            }
        }
    </script>
@endsection
