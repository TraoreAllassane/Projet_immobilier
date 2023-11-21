<?php

namespace App\Http\Controllers;

use App\Models\Biens;
use Illuminate\Http\Request;

class visiteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biens = Biens::inRandomOrder()->take(6)->get();

        return view('dashboard', ['biens' => $biens]);
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
    public function store(Request $request)
    {
        //
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