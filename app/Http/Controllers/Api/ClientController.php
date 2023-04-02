<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientType = request('type');
        $page = intval(request('page'));
        $sort = request('sort');

        if($clientType && $sort && $page) {
            //e.g api/clients?type=all&sort=asc&page=1
            if($clientType == 'individual')
            {
            return Client::with('employee')->where('client_type','individual')->orderBy("id",$sort)->paginate(5,['*'],'page',$page);
            }
            else if($clientType == 'company') 
            {
                return Client::with('employee')->where('client_type','company')->orderBy("id",$sort)->paginate(5,['*'],'page',$page);
            } 
            else  {
                //$clientType is equal all
                return Client::with('employee')->orderBy('id',$sort)->paginate(5,['*'],'page',$page);
            } 
        } 
        else
        {
            //e.g api/clients
            return Client::with('employee')->get();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {
        return Client::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        return $client->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        return Client::destroy($client->id);
    }


}
