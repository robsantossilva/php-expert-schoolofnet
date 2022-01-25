<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        return Client::all();
    }

    public function show($id)
    {
        return Client::find($id);
    }

    public function store(Request $request): JsonResponse
    {
        $client = Client::create($request->all());

        return response()->json($client, 201);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $client = Client::find($id);
        $client->fill($request->all());
        $client->save();
        return response()->json($client, 200);
    }

    public function destroy($id): JsonResponse
    {
        $client = Client::find($id);
        $client->delete();
        return response()->json($client, 204);
    }
}
