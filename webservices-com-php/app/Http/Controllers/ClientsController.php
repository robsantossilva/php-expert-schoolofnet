<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        return son_response()->make(Client::all());
    }

    public function show($id)
    {
        $client = Client::find($id);
        if (!$client) {
            throw new ModelNotFoundException("Client not found");
        }
        return son_response($client);
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            "name" => "required",
            "email" => "required",
            "phone" => "required",
        ]);

        $client = Client::create($request->all());

        return son_response($client, 201);
    }

    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        if (!$client) {
            throw new ModelNotFoundException("Client not found");
        }

        $this->validate($request, [
            "name" => "required",
            "email" => "required",
            "phone" => "required",
        ]);

        $client->fill($request->all());
        $client->save();
        return son_response($client, 200);
    }

    public function destroy($id)
    {
        $client = Client::find($id);
        if (!$client) {
            throw new ModelNotFoundException("Client not found");
        }
        $client->delete();
        return son_response($client, 204);
    }
}
