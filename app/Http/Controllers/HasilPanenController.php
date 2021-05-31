<?php

namespace App\Http\Controllers;

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

        //get tanaman id -> delete  from jadwal && delete fro sequence && delete from tanamans
        $remove = Jadwal::where('jenis_tanaman', '=', $request->jenisTanaman)->delete();

        $updateseq = dd(Tanaman::where('jenisTanaman', $request->jenisTanaman)->select(sequence)->get());
        dd($updateseq->sequence);
        if ($dump == 4) {
            Tanaman::where('jenisTanaman', $request->jenisTanaman)->delete();
        } else {
            $search = Tanaman::where('sequence', $dump + 1)->first();
            $search->sequence = $dump - 1;
            Tanaman::where('jenisTanaman', $request->jenisTanaman)->delete();
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
