<?php

namespace App\Http\Controllers;

use App\Models\M_Aktivitas;
use App\Models\M_LahanData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class C_EditAktivitas extends Controller
{
    public function setPageEditAktivitas($id)
    {
        $aktivitas = M_Aktivitas::findOrFail($id);
//        dd();
        return view('pages.V_EditAktivitas', compact('aktivitas', 'id'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'informasi' => 'required',
            'file'=>'mimes:jpeg,jpg,png,gif|required'
        ]);
        $data = $request->all();
        if (isset($data['file'])) {
            $data['gambar'] = date('dmyHis') . '.' . $request->file('file')->extension();
            Storage::putFileAs('public/aktivitas', $request->file('file'), $data['gambar']);
        }
        unset($data['file']);
        $data['lahan_id'] = $id;

        M_Aktivitas::find($id)->update($request->all());
        return redirect(route('setPageListAktivitasLahan', $id))->with('status', 'Data aktivitas Berhasil diubah!'); //menambahkan pesan data dengan notif sukses
    }
}
