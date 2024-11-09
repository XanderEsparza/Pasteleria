<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        $pastelData = $request->all();

        if ($request->hasFile('imagen')) {
            $pastelData['imagen'] = $request->file('imagen')->getRealPath();
        }

        Pastel::create($pastelData);

        return redirect()->route('pastel.index');
        
    }

    public function edit(Pastel $pastel)
    {
        return view("pastel.edit", compact('pastel'));
    }

    public function update(CreatePastelRequest $request, Pastel $pastel)
    {
        $pastelData = $request->all();

        if ($request->hasFile('imagen')) {
            $pastelData['imagen'] = $request->file('imagen')->getRealPath();
        }

        $pastel->update($pastelData);

        return redirect()->route('pastel.index');
    }

    public function show(Pastel $pastel)
    {
        return view('pastel.show', compact('pastel'));
    }

    public function mostrarImagen($id)
    {
        $pastel = Pastel::findOrFail($id);

        $rutaImagen = $pastel->imagen;

        if (file_exists($rutaImagen)) {
            return response()->file($rutaImagen);
        } else {
            abort(404, 'Imagen no encontrada.');
        }
    }

    public function destroy(Pastel $pastel)
    {
        $pastel->delete();
        return redirect() -> route('pastel.index');
    }
}
