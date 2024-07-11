<?php
namespace App\Http\Controllers;

use App\Models\Maestro;
use Illuminate\Http\Request;

class MaestroController extends Controller
{
public function index()
{
$maestros = Maestro::with('children')->whereNull('parent_id')->get();
return response()->json($maestros);
}

public function store(Request $request)
{
    $this->validate($request, [
        'name' => 'required|string|max:255',
        'parent_id' => 'nullable|exists:maestros,id'
    ]);
    $maestro = Maestro::create($request->all());
    return response()->json($maestro, 201);
}

public function show($id)
{
$maestro = Maestro::with('children')->find($id);
if ($maestro) {
return response()->json($maestro);
}
return response()->json(['message' => 'No encontrado'], 404);
}

public function update(Request $request, $id)
{
$maestro = Maestro::find($id);
if ($maestro) {
$maestro->update($request->all());
return response()->json($maestro);
}
return response()->json(['message' => 'No encontrado'], 404);
}

public function destroy($id)
{
$maestro = Maestro::find($id);
if ($maestro) {
$maestro->delete();
return response()->json(['message' => 'Eliminado correctamente']);
}
return response()->json(['message' => 'No encontrado'], 404);
}
}
