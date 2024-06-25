@extends('components.layout')

@section('content')
    <h1>Purchase Ticket</h1>
    <p>Listing ID: {{ $listingId }}</p>

    <a href="{{ url('/listings/' . $listingId) }}" class="inline-block text-black ml-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <!-- Form pembelian tiket -->
    {{-- <form action="{{ route('tickets.store') }}" method="POST"> --}}
        @csrf
        <!-- Form fields -->
        <button type="submit">Purchase</button>
    </form>
@endsection
