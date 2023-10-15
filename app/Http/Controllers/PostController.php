<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Redis\Limiters\DurationLimiterBuilder;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('posty.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //dump(request());
        return view('posty.dodaj');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //dump($request);
        //dd($request);
        //$request->dump();
        $request->validate([
            'tytul' => 'required|min:6',
            'autor' => 'required|min:2',
            'email' => 'email:rfc',
            'tresc' => 'required|min:5'
        ]);
        return ('ok');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
