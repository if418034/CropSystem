<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateHasilPanenRequest;
use App\Models\HasilPanen;
use App\Models\Tanaman;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Testing\Fluent\Concerns\Has;

class HasilPanenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $panens = HasilPanen::all();

        return view('hasilpanens.index', compact('panens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $panens = Tanaman::all();

        return view('hasilpanens.create', compact('panens'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hasilpanen = new HasilPanen();
        $hasilpanen->jenis_tanaman = $request->jenisTanaman;
        $hasilpanen->berat = $request->berat;
        $hasilpanen->nama_petani = $request->nama_petani;
        $hasilpanen->nomor_wa = $request->nomor_wa;

        $remove = Jadwal::where('jenis_tanaman', '=', $request->jenisTanaman)->delete();

        $updateseq = Tanaman::where('jenisTanaman', $request->jenisTanaman)->first();
        $dump = $updateseq->sequence;
        if ($dump == 4) {
            Tanaman::where('jenisTanaman', $request->jenisTanaman)->delete();
        } else if ($dump == 3) {
            if ($search = Tanaman::where('sequence', 4)->first()) {
                $search->sequence = 3;
                $search->save();
            }
        } else if ($dump == 2) {
            if ($search = Tanaman::where('sequence', 3)->first()) {
                $search->sequence = 2;
                $search->save();
            } else if ($search = Tanaman::where('sequence', 4)->first()) {
                $search->sequence = 3;
                $search->save();
            }
        } else if ($dump == 1) {
            if ($search = Tanaman::where('sequence', 2)->first()) {
                $search->sequence = 1;
                $search->save();
            } else if ($search = Tanaman::where('sequence', 3)->first()) {
                $search->sequence = 2;
                $search->save();
            } else if ($search = Tanaman::where('sequence', 4)->first()) {
                $search->sequence = 3;
                $search->save();
            }
        }

        $delete = Tanaman::where('jenisTanaman', '=', $request->jenisTanaman)->delete();

        $hasilpanen->save();
        return redirect()->route('hasilpanens.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $panen = HasilPanen::find($id);
        return view('hasilpanens.show', compact('panen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $panen = HasilPanen::find($id);
        return view('hasilpanens.edit', compact('panen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $panen = HasilPanen::find($id);
        $panen->berat = $request->berat;
        $panen->nama_petani = $request->nama_petani;
        $panen->nomor_wa = $request->nomor_wa;
        $panen->save();

        return redirect()->route('hasilpanens.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(HasilPanen $hasilPanen)
    {
        $hasilPanen->delete();

        return redirect()->route('hasilpanens.index');
    }
}
