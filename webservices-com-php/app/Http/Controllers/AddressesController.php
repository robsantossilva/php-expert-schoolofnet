<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Client;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class AddressesController extends Controller
{
    public function index($clientId)
    {
        $client = Client::find($clientId);
        if (!$client) {
            throw new ModelNotFoundException("Client not found");
        }
        return son_response()->make(
            Address::where('client_id', $clientId)->get()
        );
    }

    public function show($id, $clientId)
    {
        $client = Client::find($clientId);
        if (!$client) {
            throw new ModelNotFoundException("Client not found");
        }

        $address = Address::where('client_id', $clientId)->where('id', $id)->get()->first();
        if (!$address) {
            throw new ModelNotFoundException("Address not found");
        }
        return son_response()->make($address);
    }

    public function store(Request $request, $clientId)
    {
        $client = Client::find($clientId);
        if (!$client) {
            throw new ModelNotFoundException("Client not found");
        }

        $this->validate($request, [
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
        ]);

        $address = $client->addresses()->create($request->all());

        return son_response($address, 201);
    }

    public function update(Request $request, $id, $clientId)
    {
        $client = Client::find($clientId);
        if (!$client) {
            throw new ModelNotFoundException("Client not found");
        }

        $this->validate($request, [
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
        ]);

        $address = Address::where('client_id', $clientId)->where('id', $id)->get()->first();
        if (!$address) {
            throw new ModelNotFoundException("Address not found");
        }

        $address->fill($request->all());
        $address->save();
        return son_response($address, 200);
    }

    public function destroy($id, $clientId)
    {
        $client = Client::find($clientId);
        if (!$client) {
            throw new ModelNotFoundException("Client not found");
        }

        $address = Address::where('client_id', $clientId)->where('id', $id)->get()->first();
        if (!$address) {
            throw new ModelNotFoundException("Address not found");
        }

        $address->delete();
        return son_response($client, 204);
    }
}
