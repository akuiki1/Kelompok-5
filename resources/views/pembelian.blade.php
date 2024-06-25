@extends('components.layout')

@section('content')
    <div class="px-4 md:px-0">
        <div class="mx-4 max-w-4xl mx-auto mt-24">
            <x-card class="!p-10">
                <a href="/index" class="inline-block text-black ml-4 mb-4">
                    <i class="fa-solid fa-arrow-left"></i> Back
                </a>
                <div class="text-center">
                    <h3 class="text-3xl font-bold mb-8">Pembayaran</h3>
                </div>
                
                <form action="{{ route('verify-payment') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <div class="flex flex-col items-center">
                        <label for="payment_method" class="text-lg font-semibold mb-2">Metode Pembayaran:</label>
                        <select id="payment_method" name="payment_method" class="w-full max-w-md p-2 border border-gray-300 rounded-lg">
                            <option value="bank_transfer">Bank Transfer</option>
                            <option value="credit_card">Credit Card</option>
                            <option value="paypal">PayPal</option>
                        </select>
                    </div>

                    <div class="flex flex-col items-center">
                        <label for="payment_proof" class="text-lg font-semibold mb-2">Upload Bukti Pembayaran:</label>
                        <input type="file" id="payment_proof" name="payment_proof" class="w-full max-w-md p-2 border border-gray-300 rounded-lg">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="bg-orange-500 text-white py-2 px-4 rounded-xl hover:bg-orange-600">Verifikasi Pembayaran</button>
                    </div>
                </form>
            </x-card>
        </div>
    </div>
@endsection
