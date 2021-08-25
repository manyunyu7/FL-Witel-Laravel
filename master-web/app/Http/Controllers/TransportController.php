<?php

namespace App\Http\Controllers;

use App\Models\CME_PotensiPerangkat;
use App\Models\Problem;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    public function viewCreate()
    {
        return view('transport.create');
    }
    public function viewManage($divisi)
    {
        $divisi_code = $divisi;
        $divisi_name = $this->getDivisionName($divisi);
        $data = Problem::where('id_divisi', '=', $divisi)->get();
        if ($divisi == "all") {
            $data = Problem::all();
        }
        return view('problem.manage')->with(compact('data','divisi_code','divisi_name'));
    }
    
    public function viewUpdate($id)
    {
        
        $data =Problem::where('id', '=', $id)->first();
        return view('problem.edit')->with(compact('data'));
    }
    

    function store(Request $request)
    {
        // dd($request->all());

        $data = new Problem();
        $data->order= $request->order;
        $data->perihal = $request->perihal;
        $data->keterangan = $request->keterangan;
        $data->status = $request->status;
        $data->id_divisi = $request->id_divisi;

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
        $data = Problem::findOrFail($id);

        $data->order= $request->order;
        $data->perihal = $request->perihal;
        $data->keterangan = $request->keterangan;
        $data->status = $request->status;
        $data->id_divisi = $request->id_divisi;

        if ($data->save()) {
            return back()->with(["success" => "Berhasil Mengupdate Data"]);
        } else {
            return back()->with(["failed" => "Gagal Mengupdate Data"]);
        }
    }

    function destroy($id)
    {
        $data = Problem::findOrFail($id);
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
                $name = "CME";
                break;
            case '2':
                $name = "SERVICE NODE";
                break;
            case '3':
                $name = "Transport";
                break;

            default:
                # code...
                break;
        }
        return $name;
    }
}
