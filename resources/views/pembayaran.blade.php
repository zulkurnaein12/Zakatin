<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>

    <h1>Laporan Pembayaran Zakat</h1>

    <table id="customers">
        <tr>
            <th th scope="col">No</th>
            <th th scope="col">Nama</th>
            <th th scope="col">Tanggal Penerimaan</th>
            <th th scope="col">Jenis Zakat</th>
            <th th scope="col">Total Beras</th>
            <th th scope="col">Total Uang</th>
        </tr>
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
            </tr>
        @endforeach
        <tfoot>
            <tr>
                <th colspan="2">Total Beras Terkumpul</th>
                <td><strong>{{ $totalBeras }} Kg</strong></td>
                <th colspan="2">Total Uang Terkumpul</th>
                <td><strong>Rp {{ number_format($totalUang, 2) }}</strong></td>
            </tr>
        </tfoot>
    </table>

</body>

</html>
