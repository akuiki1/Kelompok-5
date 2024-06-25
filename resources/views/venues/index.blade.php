@extends('components.layout')

@section('content')
    @unless (count($venues) == 0)
        <ul>
            @foreach ($venues as $venue)
                <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
                    <h1>Venues</h1>
                    <a class="bg-orange-500 text-white py-2 px-4 rounded-xl hover:bg-orange-600" href="{{ route('venues.create') }}">Create New Venue</a>
                    @unless (count($venues) == 0)
                        @foreach ($venues as $venue)
                            <x-venue-card :venue="$venue" />
                        @endforeach
                    @else
                        <p>No venues Found</p>
                    @endunless
                </div>
                <li>
                    <a href="{{ route('venues.show', $venue->id) }}">{{ $venue->name }}</a>
                    
                </li>
            @endforeach
        </ul>
    @else
        <p>No venues Found</p>
    @endunless
@endsection
