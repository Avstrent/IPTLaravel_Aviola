<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ClassroomsController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'Index route accessed']);
    }

    public function store(Request $request)
    {
        return response()->json(['message' => 'Store route accessed']);
    }

    public function show($id)
    {
        return response()->json(['message' => "Show route accessed for ID: $id"]);
    }

    public function update(Request $request, $id)
    {
        return response()->json(['message' => "Update route accessed for ID: $id"]);
    }

    public function destroy($id)
    {
        return response()->json(['message' => "Destroy route accessed for ID: $id"]);
    }
}