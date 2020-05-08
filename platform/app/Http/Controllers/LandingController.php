<?php

namespace App\Http\Controllers;

use App\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class LandingController extends Controller
{
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
        $validatedData = $request->validate([
            'name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'identity' => 'required|numeric|unique:App\Participant,identity',
            'department' => 'required|numeric',
            'city' => 'required|numeric',
            'phone' => 'required|numeric|min:10|unique:App\Participant,phone',
            'email' => 'required|email:rfc,dns|unique:App\Participant,email',
            'habeas' => 'required',
        ]);

        Participant::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'identity' => $request->identity,
            'department_id' => $request->department,
            'citie_id' => $request->city,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        Artisan::call('winner:set');

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
