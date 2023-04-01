<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\Pagination\Paginator;

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

        if($clientType == 'individual')
        {
         return Client::where('client_type','individual')->orderBy("id",$sort)->paginate(5,['*'],'page',$page);
        }
        else if($clientType == 'company') 
        {
            return Client::where('client_type','company')->orderBy("id",$sort)->paginate(5,['*'],'page',$page);
        } 
        else  {
            //$clientType is equal all
            return Client::orderBy('id',$sort)->paginate(5,['*'],'page',$page);
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
