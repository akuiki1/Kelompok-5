@extends('components.layout')

@section('content')
    <div class="px-4 md:px-0">
        <div class="mx-4 max-w-4xl mx-auto mt-24">
            <x-card class="!p-10">
                <a href="/listing" class="inline-block text-black ml-4 mb-4">
                    <i class="fa-solid fa-arrow-left"></i> Back
                </a>
                <div class="flex flex-col items-center justify-center">
                    <div class="text-center">
                        <h3 class="text-3xl font-bold mb-8">Beli Tiket</h3>
                    </div>
                    <img class="hidden w-48 md:block" {{-- src="{{ $venue->foto ? asset('storage/' . $venue->foto) : asset('/images/no-image.png') }}"
                        alt="foto venue" /> --}}
                        src="storage/payment_proofs/AkN0HnieutNCWSSPWdgO9dK6WVDFxOwVZMe1HSCn.png" alt="">
                    <form action="/purchase-ticket" method="POST" class="space-y-6">
                        @csrf
                        <div class="flex flex-col items-center">
                            <label for="category" class="text-lg font-semibold mb-2">Kategori Tiket:</label>
                            <select id="category" name="category"
                                class="w-full max-w-md p-2 border border-gray-300 rounded-lg">
                                <option value="CAT 1A">CAT 1A - IDR 2600K</option>
                                <option value="CAT 1B">CAT 1B - IDR 2600K</option>
                                <option value="CAT 2A">CAT 2A - IDR 1900K</option>
                                <option value="CAT 2B">CAT 2B - IDR 1900K</option>
                                <option value="CAT 3A">CAT 3A - IDR 1350K</option>
                                <option value="CAT 3B">CAT 3B - IDR 1350K</option>
                                <option value="CAT 3A">CAT 4A - IDR 2250K</option>
                                <option value="CAT 3B">CAT 4B - IDR 2250K</option>
                                <option value="CAT 3A">CAT 5A - IDR 1600K</option>
                                <option value="CAT 3B">CAT 5B - IDR 1600K</option>
                            </select>
                        </div>

                        <div class="flex flex-col items-center">
                            <label for="quantity" class="text-lg font-semibold mb-2">Jumlah Tiket:</label>
                            <input type="number" id="quantity" name="quantity" min="1" max="10"
                                value="1" class="w-full max-w-md p-2 border border-gray-300 rounded-lg">
                        </div>

                        <div class="flex flex-col items-center">
                            <label for="quantity" class="text-lg font-semibold mb-2">Harga:</label>
                            <p class="text-lg text-orange-500 mb-6">Rp 1.350.000</p>
                        </div>

                        <div class="text-center">
                            <button type="submit"
                                class="bg-orange-500 text-white py-2 px-4 rounded-xl hover:bg-orange-600">Lanjutkan
                                Pembelian</button>
                        </div>
                    </form>
                </div>
            </x-card>
        </div>
    </div>
@endsection
