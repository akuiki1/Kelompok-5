@extends('components.layout')

@section('content')
    <div class="px-4 md:px-0">
        <div class="mx-4 max-w-4xl mx-auto mt-24">
            <x-card class="!p-10">
                <a href="/" class="inline-block text-black ml-4 mb-4">
                    <i class="fa-solid fa-arrow-left"></i> Back
                </a>
                <div class="text-center">
                    <h3 class="text-3xl font-bold mb-8">Cetak Tiket</h3>
                </div>
                
                <div class="text-center">
                    <p class="mb-6">Pembayaran Anda berhasil diverifikasi.</p>
                    <a href="/download-ticket" class="bg-orange-500 text-white py-2 px-4 rounded-xl hover:bg-orange-600">Download Tiket</a>
                </div>
            </x-card>
        </div>
    </div>
@endsection
