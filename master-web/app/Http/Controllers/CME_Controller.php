<?php

namespace App\Http\Controllers;

use App\Models\CME_PotensiPerangkat;
use Illuminate\Http\Request;

class CME_Controller extends Controller
{
    public function viewCreate($divisi)
    {
        $divisi_code = $divisi;
        $divisi_name = $this->getDivisionName($divisi);
        return view('cme.potensi_perangkat.create')->with(compact('divisi_code', 'divisi_name'));
    }
    public function viewManage($divisi)
    {
        $divisi_code = $divisi;
        $divisi_name = $this->getDivisionName($divisi);
        $data = CME_PotensiPerangkat::where('divisi_cme', '=', $divisi)->get();
        if ($divisi == "all") {
            $data = CME_PotensiPerangkat::all();
        }
        return view('cme.potensi_perangkat.manage')->with(compact('data','divisi_code','divisi_name'));
    }
    public function viewUpdate($id)
    {
        $data = CME_PotensiPerangkat::where('id', '=', $id)->first();
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
        $data->divisi_cme= $request->id_divisi;
        $data->jenis_perangkat = $request->jenis_perangkat;
        if($request->jenis_perangkat != "Lainnya"){
            $data->jenis_perangkat = $request->jenis_perangkat;
        }else{
            $data->jenis_perangkat = $request->jenis_perangkat_lainnya;
        }
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

    function edit(Request $request, $id)
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
        $data = CME_PotensiPerangkat::findOrFail($id);

        if($request->jenis_perangkat != "Lainnya"){
            $data->jenis_perangkat = $request->jenis_perangkat;
        }else{
            $data->jenis_perangkat = $request->jenis_perangkat_lainnya;
        }

        $data->divisi_cme = $request->divisi_cme;
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
            return back()->with(["success" => "Berhasil Mengupdate Data"]);
        } else {
            return back()->with(["failed" => "Gagal Mengupdate Data"]);
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

    function getDivisionName($id)
    {
        $name = "";
        switch ($id) {
            case '1':
                $name = "AHMAD YANI";
                break;
            case '2':
                $name = "TANJUNG SARI";
                break;
            case '3':
                $name = "SUMEDANG";
                break;
            case '4':
                $name = "UJUNG BERUNG";
                break;
            case '5':
                $name = "TURANGGA";
                break;
            case '6':
                $name = "TEGALEGA";
                break;

            case '7':
                $name = "DAGO";
                break;

            case '8':
                $name = "HEGARMANAH";
                break;

            case '9':
                $name = "GEGERKALONG";
                break;

            case '10':
                $name = "LEMBONG";
                break;

            case '11':
                $name = "KOPO";
                break;

            case '12':
                $name = "CIJAWURA";
                break;

            default:
                # code...
                break;
        }
        return $name;
    }
}
