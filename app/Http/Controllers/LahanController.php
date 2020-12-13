<?php

namespace App\Http\Controllers;

use App\Lahans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;
use App\Models\Lahan;


class LahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dump($lahan); //mengambil data dari database
        $lahan = Lahan::all(); //mengambil data dari database
        return view('lahan/index', ['lahan' => $lahan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lahan/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

        // //insert ke database
        // // Lahan::create([
        // //     'judul' => $request->judul,
        // //     'lokasi_lahan' => $request->lokasi_lahan,
        // //     'ukuran_lahan' => $request->ukuran_lahan,
        // //     'ukuran_lahan_garap' => $request->ukuran_lahan_garap,
        // //     'periode_tanam' => $request->periode_tanam,
        // //     'jenis_bibit' => $request->jenis_bibit,
        // //     'obat' => $request->obat,
        // //     'pupuk' => $request->pupuk,
        // //     'hasil_tanam' => $request->hasil_tanam
        // // ]);

        // //validation
        // //sebelum mengirim ke database(request) 
        $request->validate([
            'judul' => 'required',
            'lokasi_lahan' => 'required',
            'ukuran_lahan' => 'required',
            'ukuran_lahan_garap' => 'required',
            'periode_tanam' => 'required'
        ]);

        // //cara ke-2 untuk insert database,  all artinya semua data kecuali data yang bukan fillabel dibagian model 
        Lahan::create($request->all());

        //menampilkan data ke halaman lahan
        return redirect('/lahan')->with('status', 'Data Lahan Berhasil Ditambahkan!'); //menambahkan pesan data dengan notif sukses
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Lahan $lahan)
    {
        // return $lahan;
        return view('lahan/show', compact('lahan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Lahan $lahan) //edit untuk ubah form
    {
        return view('lahan/edit', compact('lahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lahan $lahan)  //update untuk ubah
    {
        // return $lahan; //akan memangil data lama
        Lahan::where('id_lahan', $lahan->id_lahan)
            ->update([
                'judul' => $request->judul,
                'lokasi_lahan' => $request->lokasi_lahan,
                'ukuran_lahan' => $request->ukuran_lahan,
                'ukuran_lahan_garap' => $request->ukuran_lahan_garap,
                'periode_tanam' => $request->periode_tanam,
                'jenis_bibit' => $request->jenis_bibit,
                'obat' => $request->obat,
                'pupuk' => $request->pupuk,
                'hasil_tanam' => $request->hasil_tanam
            ]);
        // return $request; //maka akan mengambil data yang baru diubah
        return redirect('/lahan')->with('status', 'Data Lahan Berhasil Diubah!'); //redirect : respon yang akan memindahkan ke halaman yang diinginkan
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lahan $lahan)
    {
        Lahan::destroy($lahan->id_lahan);

        return redirect('/lahan')->with('status', 'Data Lahan Berhasil Dihapus!');
        // return view('/lahan/{{$lahan->id}}')
    }
}
