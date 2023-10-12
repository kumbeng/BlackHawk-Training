<?php

namespace App\Http\Controllers;

use App\Models\Agensi;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
public function create ()
{ 
    return view ('agency.create');
}        
public function store(Request $request)
{
    Agensi::create([
        'name' => $request->name,
        'alamat' => $request->alamat
    ]);

    return to_route('home')->with('mesej', 'Berjaya di Daftar');
}

public function show(Agensi $agency)
{
    return view('agency.show', compact('agency'));
}

public function update(Request $request, Agensi $agency)
{
    $agency->update([
        'name' => $request->name,
        'alamat' => $request->alamat
    ]);

    return to_route('home')->with('mesej', 'Kemaskini telah berjaya');
}

public function delete(Agensi $agency)
{
    $agency->delete();

    return to_route('home')->with('mesej', 'Agensi dipadam');
}
}
