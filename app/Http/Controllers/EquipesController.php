<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipes;
use Illuminate\Support\Facades\Http;

class EquipesController extends Controller
{
    public function index()
    {
        return Equipes::all();
    }
 
    public function show(Equipes $equipe)
    {
        return $equipe;
    }
 
    public function store(Request $request)
    {
        $equipe = Equipes::create($request->all());
 
        return response()->json_encode($equipe, 201);
    }
 
    public function update(Request $request, Equipes $equipe)
    {
        $equipe->update($request->all());
 
        return response()->json_encode($equipe, 200);
    }
 
    public function delete(Equipes $equipe)
    {
        $equipe->delete();
 
        return response()->json_encode(null, 204);
    }
}
