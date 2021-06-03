<?php

namespace App\Http\Controllers;

use App\Models\Tanaman;
use Illuminate\Http\Request;

class SequenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notinsequence = Tanaman::where('sequence', null)->get();
        $count = count($notinsequence);
        $sequences = Tanaman::join('kategori_tanamans as kat', 'tanamans.id_kategori', '=', 'kat.id')->where('tanamans.sequence', '>=', 1)->select('tanamans.*', 'kat.kategori as kategori')->orderBy('tanamans.sequence')->get();
        $countt = count($sequences);
        //        dd(Tanaman::join('kategori_tanamans as kat', 'tanamans.id_kategori', '=', 'kat.id')->where('tanamans.sequence','>=',1)->select('tanamans.*', 'kat.kategori as kategori')->orderBy('tanamans.sequence')->get());

        return view('sequences.index', compact('sequences', 'notinsequence', 'count', 'countt'));
    }

    public function editUrutan()
    {
        $tanamans = Tanaman::join('kategori_tanamans as kat', 'tanamans.id_kategori', '=', 'kat.id')->select('tanamans.*', 'kat.kategori as kategori')->orderBy('tanamans.sequence')->get();
        return view('sequences.edit', compact('tanamans'));
    }

    public function simpanUrutan(Request $request)
    {
        $sequences = Tanaman::where('sequence', '>=', 1)->orderBy('sequence')->get();
        $notinsequence = Tanaman::where('sequence', null)->get();
        $count = count($notinsequence);
        $tanamans = Tanaman::orderBy('sequence')->get();
        $data = Tanaman::all();
        $i = 0;
        foreach ($data as $tanam) {
            $tanam = Tanaman::where('id', $request->id[$i])->first();
            if ($request->sequence[$i] == 0) {
                $tanam->sequence = null;
            } else {
                $tanam->sequence = $request->sequence[$i];
            }
            $tanam->save();
            $i++;
        }
        return view('sequences.index', compact('sequences', 'notinsequence', 'count'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
