@extends('components.layout')

@section('content')
<div class="px-4 md:px-0">
    <x-card class="!p-10 rounded max-w-4xl mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Tambahkan Venue Baru
            </h2>
            <p class="mb-4">Isi form berikut untuk menambahkan venue baru</p>
        </header>

        <form action="{{ route('venues.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-6">
                <label for="nama" class="inline-block text-lg mb-2">Nama Venue</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="nama"
                    value="{{ old('nama') }}" required/>

                @error('nama')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="foto" class="inline-block text-lg mb-2">
                    Foto Venue
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="foto" />

                @error('foto')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="alamat" class="inline-block text-lg mb-2">Alamat</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="alamat"
                    value="{{ old('alamat') }}" required/>

                @error('alamat')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="kota" class="inline-block text-lg mb-2">Kota</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="kota"
                    value="{{ old('kota') }}" required/>

                @error('kota')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="kapasitas" class="inline-block text-lg mb-2">Kapasitas</label>
                <input type="number" class="border border-gray-200 rounded p-2 w-full" name="kapasitas"
                    value="{{ old('kapasitas') }}" required/>

                @error('kapasitas')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="deskripsi" class="inline-block text-lg mb-2">Deskripsi</label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="deskripsi" rows="10" required>{{ old('deskripsi') }}</textarea>

                @error('deskripsi')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 flex justify-end items-center">
                <a href="{{ route('venues.index') }}" class="text-black mr-4"> Kembali </a>
                <button type="submit" class="bg-orange-500 text-white rounded py-2 px-4 hover:bg-orange-400">
                    Tambahkan
                </button>
            </div>
        </form>
    </x-card>
</div>
@endsection
