<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\Getpass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GetpassController extends Controller
{
    public function getGetpass()
    {
        return view(view: 'getpass');
    }

    public function postStore(Request $request)
    {
        $current_date = Carbon::now()->format('Y-m-d');
        $getpass_count = Getpass::whereBetween('created_at', [$current_date . ' 00:00:00', $current_date . ' 23:59:59'])->count();

        $token = "Pass-" . Carbon::now()->format('ymd') . str_pad($getpass_count + 1, 3, "0", STR_PAD_LEFT);

        $req_all = $request->all();
        $req_all["token"] = $token;
        $getpass = new Getpass();
        $getpass->create($req_all);

        $data = ['name' => $token, 'data' => "testing email"];
        $user['to'] = $req_all["email"];
        Mail::send('layouts.mail', $data, function ($message) use ($user) {
            $message->to($user['to']);
            $message->subject('Visitor Pass');
        });

        return ['success' => true, 'message' => 'Inserted successfully', 'token' => $token];
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
