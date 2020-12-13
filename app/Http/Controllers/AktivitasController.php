<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use App\Models\Lahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

class AktivitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aktivitas = Aktivitas::all();
        $lahan = Lahan::all();
        // dd($aktivitas);
        return view('aktivitas/index', [
            'aktivitas' => $aktivitas,
            'lahan' => $lahan
        ]);
        //return view('aktivitas/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Lahan $lahan)
    {
        return view('aktivitas/create', compact('lahan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'judul' => 'required',
        //     'informasi' => 'required',
        //     'gambar' => 'required'
        // ]);

        Aktivitas::create($request->all());
        return redirect('/aktivitas/list/{{$a->id_lahan}}');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function list($id_lahan)
    {
        return view('aktivitas/list', [
            'lahan' => Lahan::where('id_lahan', $id_lahan)->first(),
            'aktivitas' => Aktivitas::where('id_lahan', $id_lahan)->get()
        ]);
    }

    public function show(Aktivitas $aktivitas)
    {
        return view('aktivitas/show', [
            'lahan' => Lahan::where('id_lahan', $aktivitas->id_lahan)->first(),
            'aktivitas' => Aktivitas::where('id_aktivitas', $aktivitas->id_aktivitas)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Aktivitas $aktivitas)
    {
        return view('aktivitas/edit', compact('aktivitas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aktivitas $aktivitas)
    {
        Aktivitas::where('id', $aktivitas->id)
            ->update([
                'judul' => $request->judul,
                'informasi' => $request->informasi,
                'gambar' => $request->gambar,

            ]);

        return redirect('/aktivitas/show');
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
