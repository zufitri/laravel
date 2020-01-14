<?php

namespace App\Http\Controllers;

use App\perpus;
use Illuminate\Http\Request;

class PerpusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $buku=Buku::all();
         return $buku;
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
     * @param  \App\perpus  $perpus
     * @return \Illuminate\Http\Response
     */
    public function show(perpus $perpus)
    {
        $buku= Buku::find($id);
        return $buku;
    }
    public function hitungBuku()
    {
        $buku=Buku::count();
        return $buku;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\perpus  $perpus
     * @return \Illuminate\Http\Response
     */
    public function edit(perpus $perpus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\perpus  $perpus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perpus $perpus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\perpus  $perpus
     * @return \Illuminate\Http\Response
     */
    public function destroy(perpus $perpus)
    {
        //
    }
}
