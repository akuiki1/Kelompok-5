<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    // Menampilkan form pembelian tiket
    public function showPurchaseForm()
    {
        return view('buy-ticket');
    }

    // Memproses pembelian tiket dan mengarahkan ke halaman pembayaran
    public function processPurchase(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'category' => 'required|string',
            'quantity' => 'required|integer|min:1|max:10',
        ]);

        // Simpan data pembelian ke session atau database
        session(['purchase' => $validated]);

        return redirect()->route('payment');
    }

    // Menampilkan form pembayaran
    public function showPaymentForm()
    {
        return view('pembelian');
    }

    // Memproses verifikasi pembayaran dan mengarahkan ke halaman cetak tiket
    public function verifyPayment(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'payment_method' => 'required|string',
            'payment_proof' => 'required|image|max:2048',
        ]);

        // Simpan bukti pembayaran ke storage dan verifikasi pembayaran
        $path = $request->file('payment_proof')->store('payment_proofs', 'public');

        // Simpan data pembayaran ke session atau database
        session(['payment' => $validated, 'payment_proof' => $path]);

        return redirect()->route('print-ticket');
    }

    // Menampilkan halaman cetak tiket
    public function showPrintTicketForm()
    {
        return view('cetak-tiket');
    }
}
