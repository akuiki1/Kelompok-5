<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    // Display a listing of the venues
    public function index()
    {
        $venues = Venue::all();
        return view('venues.index', compact('venues'));
    }

    // Show the form for creating a new venue
    public function create()
    {
        return view('venues.create');
    }

    // Store a newly created venue in storage
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'required',
            'alamat' => 'required|string|max:255',
            'kota' => 'nullable|string|max:255',
            'kapasitas' => 'required|integer',
            'deskripsi' => 'nullable|string',
        ]);

        Venue::create($request->all());

        return redirect()->route('venues.index')->with('success', 'Venue created successfully.');
    }

    // Display the specified venue
    public function show(Venue $venue)
    {
        return view('venues.show', compact('venue'));
    }

    // Show the form for editing the specified venue
    public function edit(Venue $venue)
    {
        return view('venues.edit', compact('venue'));
    }

    // Update the specified venue in storage
    public function update(Request $request, Venue $venue)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'required',
            'alamat' => 'required|string|max:255',
            'kota' => 'nullable|string|max:255',
            'kapasitas' => 'required|integer',
            'deskripsi' => 'nullable|string',
        ]);

        $venue->update($request->all());

        return redirect()->route('venues.index')->with('success', 'Venue updated successfully.');
    }

    // Remove the specified venue from storage
    public function destroy(Venue $venue)
    {
        $venue->delete();

        return redirect()->route('venues.index')->with('success', 'Venue deleted successfully.');
    }
}
