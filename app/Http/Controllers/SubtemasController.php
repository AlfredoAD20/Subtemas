<?php

namespace App\Http\Controllers;

use App\Models\Subtemas;
use Illuminate\Http\Request;

class SubtemasController extends Controller
{
    public function index()
    {
        $subtemas = Subtemas::all();
        return view('subtemas.index', compact('subtemas'));
    }

    public function create()
    {
        return view('subtemas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'noDeSubtema' => 'required|string|max:15|unique:subtemas,noDeSubtema',
            'noDeUnidad' => 'required|string|max:2',
            'materia' => 'required|string|max:7',
            'nombreSubtema' => 'required|string|max:150',
        ]);

        Subtemas::create($validated);

        return redirect()->route('subtemas.index')->with('success', 'Subtema creado con éxito.');
    }

    public function show($noDeSubtema)
    {
        $subtema = Subtemas::findOrFail($noDeSubtema);
        return view('subtemas.show', compact('subtema'));
    }

    public function edit($noDeSubtema)
    {
        $subtema = Subtemas::findOrFail($noDeSubtema);
        return view('subtemas.edit', compact('subtema'));
    }

    public function update(Request $request, $noDeSubtema)
    {
        $subtema = Subtemas::findOrFail($noDeSubtema);

        $validated = $request->validate([
            'noDeUnidad' => 'required|string|max:2',
            'materia' => 'required|string|max:7',
            'nombreSubtema' => 'required|string|max:150',
        ]);

        $subtema->update($validated);

        return redirect()->route('subtemas.index')->with('success', 'Subtema actualizado con éxito.');
    }

    public function destroy($noDeSubtema)
    {
        $subtema = Subtemas::findOrFail($noDeSubtema);
        $subtema->delete();

        return redirect()->route('subtemas.index')->with('success', 'Subtema eliminado con éxito.');
    }
}
