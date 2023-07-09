<?php

namespace App\Http\Controllers\Muzakki;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use App\Models\Penerimaan;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function checkout(Request $request)
    {
        $zakatfit = Pembayaran::sum('total_beras');
        $zakatmaal = Pembayaran::sum('total_uang');
        $penerimaanberas = Penerimaan::sum('total_beras');
        $penerimaanuang = Penerimaan::sum('total_uang');
        // Membuat pembayaran baru
        $pembayaran = Pembayaran::create([
            'user_id' => auth()->user()->id,
            'nama' => $request->nama,
            'phone' => $request->phone,
            'alamat' => $request->alamat,
            'total_uang' => $request->total_uang,
            'ket' => $request->ket,
            'jenja' => 'Zakat Maal',
            'status' => 'unpaid'
        ]);

        // Mengonfigurasi pengaturan Midtrans
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        // Membuat parameter untuk pembayaran Midtrans
        $params = array(
            'transaction_details' => array(
                'order_id' => $pembayaran->id, // Menggunakan 'order_id' sebagai kunci, bukan 'pembayaran_id'
                'gross_amount' => $pembayaran->total_uang,
            ),
            'customer_details' => array(
                'first_name' => $request->nama, // Menggunakan 'first_name' sebagai kunci, bukan 'nama'
                'phone' => $request->phone, // Menggunakan 'phone' sebagai kunci, bukan 'no_tlp'
                'address' => $request->alamat,
            ),
        );

        // Mendapatkan token Snap dari Midtrans
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('muzakki.pembayaran.checkout', compact('snapToken', 'pembayaran', 'zakatfit', 'zakatmaal', 'penerimaanberas', 'penerimaanuang'));
    }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture') {
                $pembayaran = Pembayaran::find($request->order_id);
                $pembayaran->update(['status' => 'paid']);
            }
        }
    }

    public function invoice($id)
    {
        $pembayaran = Pembayaran::find($id);
        return view('muzakki.pembayaran.detail', compact('pembayaran'));
    }
}
