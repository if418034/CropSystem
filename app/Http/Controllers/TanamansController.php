<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTanamanRequest;
use App\Http\Requests\UpdateTanamanRequest;
use App\Models\KategoriTanaman;
use Illuminate\Http\Request;
use App\Models\Tanaman;

class TanamansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanamans = Tanaman::join('kategori_tanamans as kat', 'tanamans.id_kategori', '=', 'kat.id')->get();
//        dd(Tanaman::join('kategori_tanamans as kat', 'tanamans.id', '=', 'kat.id')->get());

        return view('tanamans.index', compact('tanamans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = KategoriTanaman::all();
        return view('tanamans.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        Tanaman::create($request->validated());
        $tanaman = new Tanaman();
        $tanaman->id_kategori = $request->id_kategori;
        $tanaman->jenisTanaman = $request->jenisTanaman;
        $tanaman->kondisiAgroclimatic = $request->kondisiAgroclimatic;
        $tanaman->jenisPupuk = $request->jenisPupuk;
        $tanaman->save();
        return redirect()->route('tanamans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tanaman $tanaman, KategoriTanaman $kategories)
    {
        return view('tanamans.show', compact('tanaman', 'kategories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tanaman $tanaman)
    {
        return view('tanamans.edit', compact('tanaman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTanamanRequest $request, Tanaman $tanaman)
    {
        $tanaman->update($request->validated());

        return redirect()->route('tanamans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tanaman $tanaman)
    {
        $tanaman->delete();

        return redirect()->route('tanamans.index');
    }
}
