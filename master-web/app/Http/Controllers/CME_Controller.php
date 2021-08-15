<?php

namespace App\Http\Controllers;

use App\Models\CME_PotensiPerangkat;
use Illuminate\Http\Request;

class CME_Controller extends Controller
{
    public function viewCreate()
    {
        return view('cme.potensi_perangkat.create');
    }
    public function viewManage()
    {
        $data = CME_PotensiPerangkat::all();
        return view('cme.potensi_perangkat.manage')->with(compact('data'));
    }
    public function viewUpdate($id)
    {
        $data = CME_PotensiPerangkat::where('id','=',$id);
        return view('cme.potensi_perangkat.edit')->with(compact('data'));
    }


    function store(Request $request)
    {
        // dd($request->all());

        $validateComponent = [
            // RAZ : not edited yet
            "user_name" => "required",
            "user_email" => "required",
            "user_password" => "required",
            "user_role" => "required",
        ];

        // $this->validate($request, $validateComponent);

        $data = new CME_PotensiPerangkat();
        $data->jenis_perangkat = $request->jenis_perangkat;
        $data->merk = $request->merk;
        $data->type = $request->type;
        $data->no_seri = $request->no_seri;
        $data->kap_tps = $request->kap_tps;
        $data->kap_tpk = $request->kap_tpk;
        $data->beban = $request->beban;
        $data->kondisi = $request->kondisi;
        $data->thn_ope = $request->tahun_operasi;
        $data->keterangan = $request->keterangan;
        if ($data->save()) {
            return back()->with(["success" => "Berhasil Menambahkan Data"]);
        } else {
            return back()->with(["failed" => "Gagal Menambahkan Data"]);
        }
    }

    function destroy($id)
    {
        $data = CME_PotensiPerangkat::findOrFail($id);
        if ($data->delete()) {
            return back()->with(["success" => "Berhasil Menghapus Data"]);
        } else {
            return back()->with(["error" => "Gagal Menghapus User Baru"]);
        }
    }
}
