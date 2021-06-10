<?php

namespace App\Http\Controllers;

use App\Models\Getpass;
use Illuminate\Http\Request;

class GetpassController extends Controller
{
    public function getGetpass()
    {
        return view(view: 'getpass');
    }

    public function postStore(Request $request)
    {
        $getpass = new Getpass();
        $getpass->create($request->all());
        return ['success' => true, 'message' => 'Inserted successfully'];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Getpass  $getpass
     * @return \Illuminate\Http\Response
     */
    public function show(Getpass $getpass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Getpass  $getpass
     * @return \Illuminate\Http\Response
     */
    public function edit(Getpass $getpass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Getpass  $getpass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Getpass $getpass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Getpass  $getpass
     * @return \Illuminate\Http\Response
     */
    public function destroy(Getpass $getpass)
    {
        //
    }
}
