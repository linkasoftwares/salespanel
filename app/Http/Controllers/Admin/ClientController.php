<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::get();

        return view('admin.clients.all', compact('clients'));
    }

    public function newClient()
    {
        return view('admin.clients.new');
    }

    public function registerClient(Request $request)
    {
        $client = Client::create($request->all());

        return redirect()->route('clients');
    }
}
