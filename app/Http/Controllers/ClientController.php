<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        return response()->json([
            'clients'=>client::get()
        ]);
    }

        public function store(Request $request)
    {
        $client = new Client;
        $client->name = $request->name;
        $client->gender = $request->gender;
        $client->email = $request->email;
        $client->status = $request->status;

        $client->save();

        return response()->json([
            'message' => 'Client Created',
            'status' => 'Success',
            'data' => $client
        ]);
    }

    public function show(Client $client)
    {
        return response()->json(['client'=>$client]);
    }


    public function update(Request $request, Client $client)
    {
        $client->name = $request->name;
        $client->gender = $request->gender;
        $client->email = $request->email;
        $client->status = $request->status;

        $client->save();

        return response()->json([
            'message' => 'Client updatedd',
            'status' => 'Success',
            'data' => $client
        ]);
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return response()->json([
            'message'=>'user deleted',
            'status'=>'success'
            ]);
    }
}
