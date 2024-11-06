<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pastel;
use App\Http\Requests\CreatePastelRequest;

class PastelController extends Controller
{
    public function index()
    {
        $pasteles = Pastel::all();
        return view("pastel.index", compact('pasteles'));
    }

    public function create()
    {
        return view("pastel.create");
    }

    public function store(CreatePastelRequest $request)
    {
        Pastel::create($request->all());
        return redirect() -> route('pastel.index');
    }

    public function edit(Pastel $pastel)
    {
        return view("pastel.edit", compact('pastel'));
    }

    public function update(CreatePastelRequest $request, Pastel $pastel)
    {
        $pastel->update($request->all());
        return redirect() -> route("pastel.index");
    }

    public function show(Pastel $pastel)
    {
        return view('pastel.show', compact('pastel'));
    }

    public function destroy(Pastel $pastel)
    {
        $pastel->delete();
        return redirect() -> route('pastel.index');
    }
}
