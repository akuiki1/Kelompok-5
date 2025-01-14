@extends('components.layout')

@section('content')
<div class="px-4 md:px-0">
    <x-card class="!p-10 rounded max-w-4xl mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Tambahkan Event Baru
            </h2>
            <p class="mb-4">Post a gig to find artists</p>
        </header>

        <form action="/listings" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="organizer" class="inline-block text-lg mb-2">Penyelenggara</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="organizer"
                    value="{{ old('organizer') }}" />

                @error('organizer')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Nama Event</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                    placeholder="Cadenza music fest" value="{{ old('title') }}" />

                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Lokasi</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                    placeholder="Stadium" value="{{ old('location') }}" />

                @error('location')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="date" class="inline-block text-lg mb-2">Tanggal Event</label>
                <input type="date" class="border border-gray-200 rounded p-2 w-full" name="date" value="{{ old('date') }}" />
                @error('date')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"
                    placeholder="sample@email.com" value="{{ old('email') }}" />

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="contact_number" class="inline-block text-lg mb-2">
                    Contact number
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="contact_number"
                    value="{{ old('contact_number') }}" />

                @error('contact_number')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (comma separated)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                    placeholder="Example: Music Festival, Private event, etc" value="{{ old('tags') }}" />

                @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="event_banner" class="inline-block text-lg mb-2">
                    Event Banner
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="event_banner" />

                @error('event_banner')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Deskripsi Event
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10">{{ old('description') }}</textarea>

                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 flex justify-end items-center">

                <a href="/index" class="text-black mr-4"> Back </a>

                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Create
                </button>


            </div>
        </form>
    </x-card>

</div>
@endsection
