<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->input('query') != null)
        {
            $q = urldecode($request->input('query'));
            $results = DB::table('clients')
            ->where('id', 'like', '%' .$q .'%')
            ->orWhere('name', 'like', '%' .$q .'%')
            ->orWhere('mail', 'like', '%' .$q .'%')
            ->orWhere('cityandzipcode', 'like', '%' .$q .'%')
            ->orWhere('name', 'like', '%' .$q .'%')
            ->orWhere('state', 'like', '%' .$q .'%')
            ->orWhere('country', 'like', '%' .$q .'%')->paginate(15);

            return view("client.index", compact("results"));
        } else {
            $results = 0;
            return view("client.index", compact("results"));
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("client.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|unique:clients|max:100',
            'mail' => 'required|email',
            'streetandhousenumber' => 'required',
            'cityandzipcode' => 'required',
            'state' => 'required',
            'country' => 'required'
        ]);

        $client = new Client;
        $client->name = $request->name;
        $client->mail = $request->mail;
        $client->streetandhousenumber = $request->streetandhousenumber;
        $client->cityandzipcode = $request->cityandzipcode;
        $client->state = $request->state;
        $client->country = $request->country;
        $client->description = $request->description;
        $client->administrative = $request->administrative;
        $client->save();

        return redirect("client/" .$client->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        return view("client.show", compact("client"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
