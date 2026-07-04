<?php

namespace App\Http\Controllers;

use App\Models\Subtemas;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ApiSubtemasController extends Controller
{
    public function index()
    {
        $subtemas = Subtemas::all();
        return response()->json($subtemas);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'noDeSubtema' => 'required|string|max:15|unique:subtemas,noDeSubtema',
            'noDeUnidad' => 'required|string|max:2',
            'materia' => 'required|string|max:7',
            'nombreSubtema' => 'required|string|max:150',
        ]);

        $subtemas = Subtemas::create($request->all());
        return response()->json($subtemas, 201);
    }

    public function show(string $id)
    {
        try {
            $subtemas = Subtemas::findOrFail($id);
            return response()->json($subtemas);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Subtema no encontrado'], 404);
        }
    }

    public function edit(Subtemas $subtemas)
    {
    }

    public function update(Request $request, string $id)
    {
        $subtemas = Subtemas::findOrFail($id);

        $validated = $request->validate([
            'noDeUnidad' => 'required|string|max:2',
            'materia' => 'required|string|max:7',
            'nombreSubtema' => 'required|string|max:150',
        ]);

        $subtemas = Subtemas::findOrFail($id);
        $subtemas->update($request->all());
        return response()->json($subtemas);
    }

    public function destroy(string $id)
    {
        Subtemas::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
