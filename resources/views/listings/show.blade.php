@extends('components.layout')

@section('content')
    <div class="px-4 md:px-0">
        <div class="mx-4 max-w-4xl mx-auto mt-24">
            <x-card class="!p-10">
                <a href="/index" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
                </a>
                <div class="flex flex-col items-center justify-center text-center">
                    <img class="hidden w-48 md:block"
                        src="{{ $listing->event_banner ? asset('storage/' . $listing->event_banner) : asset('/images/no-image.png') }}"
                        alt="" />

                    <h3 class="text-2xl mb-2">{{ $listing->title }}</h3>
                    <div class="text-xl font-bold mb-4">{{ $listing->organizer }}</div>

                    <x-listing-tags :tags="$listing->tags" />

                    <div class="text-lg my-4">
                        <i class="fa-solid fa-calendar"></i> {{ $listing->date }} <br>
                        <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
                    </div>
                    <div class="border border-gray-200 w-full mb-6"></div>
                    <div class="w-full">
                        <h3 class="text-3xl font-bold mb-4">
                            Gig Description
                        </h3>
                        <div class="text-lg space-y-6 pb-10">
                            <p>
                                {{ $listing->description }}
                            </p>

                            {{-- <a href="mailto:{{ $listing->email }}"
                                class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"><i
                                    class="fa-solid fa-envelope"></i>
                                Contact Organizer</a>

                            <a href="https://test.com" target="_blank"
                                class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i
                                    class="fa-solid fa-globe"></i> Visit
                                Facebook Page</a> --}}
                        </div>
                    </div>
                    <div class="flex items-center justify-center">
                        <h3 class="text-3xl font-bold mb-4"> </h3>
                        <img src="/storage/payment_proofs/AkN0HnieutNCWSSPWdgO9dK6WVDFxOwVZMe1HSCn.png" alt="Venue Photo" class="w-48 h-auto mb-4">
                    </div>
                    <div class="w-full flex justify-between items-center mt-8">
                        <div class="flex flex-col items-start">
                            <h3 class="text-3xl font-bold mb-4">Harga Tiket</h3>
                            <p class="text-lg text-orange-500 mb-6">IDR 1600K - 2600K / Tiket</p>
                        </div>
                        <a href="{{ route('buy-ticket', ['listing_id' => $listing->id]) }}" class="bg-orange-500 text-white py-2 px-4 rounded-xl hover:bg-orange-600">Beli Tiket</a>
                    </div>                    
                </div>
            </x-card>
            <x-card class="mt-4 p-2 flex space-x-6">
                <a href="/listings/{{ $listing->id }}/edit">
                    <i class="fa-solid fa-pencil"></i> Edit
                </a>

                <form action="/listings/{{ $listing->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500"><i class="fa-solid fa-trash"></i>Delete</button>
                </form>
            </x-card>

        </div>

    </div>
@endsection
