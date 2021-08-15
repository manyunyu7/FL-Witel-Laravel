<?php

namespace App\Http\Controllers;

use App\Models\SERVICE_NODE_DataIntegrationNode;
use App\Models\SERVICE_NODE_ISDN as mISDN;
use App\Models\SERVICE_NODE_ISDN;
use Illuminate\Http\Request;

class SERVICE_NODE_IsdnController extends Controller
{
    public function viewCreate()
    {
        return view('service_node.isdn.create');
    }
    public function viewManage()
    {
        $data = mISDN::all();
        return view('service_node.isdn.manage')->with(compact('data'));
    }
    public function viewUpdate($id)
    {
        $data = mISDN::where('id', '=', $id)->first();
        return view('service_node.isdn.edit')->with(compact('data'));
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

        $data = new SERVICE_NODE_ISDN();
        $data->tg_no = $request->tg_no;
        $data->tg_name = $request->tg_name;
        $data->sub_route_number = $request->sub_route_number;
        $data->name = $request->name;
        $data->name_customers = $request->name_customers;
        $data->signaling_link_number = $request->signaling_link_number;
        $data->telp = $request->telp;
        $data->keterangan = $request->keterangan;
        $data->equipment_id = $request->equipment_id;
        if ($data->save()) {
            return back()->with(["success" => "Berhasil Menambahkan Data"]);
        } else {
            return back()->with(["failed" => "Gagal Menambahkan Data"]);
        }
    }

    function edit(Request $request,$id)
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

       
        $data = mISDN::findOrFail($id);
        $data->tg_no = $request->tg_no;
        $data->tg_name = $request->tg_name;
        $data->sub_route_number = $request->sub_route_number;
        $data->name = $request->name;
        $data->name_customers = $request->name_customers;
        $data->signaling_link_number = $request->signaling_link_number;
        $data->telp = $request->telp;
        $data->keterangan = $request->keterangan;
        $data->equipment_id = $request->equipment_id;
        if ($data->save()) {
            return back()->with(["success" => "Berhasil Menambahkan Data"]);
        } else {
            return back()->with(["failed" => "Gagal Menambahkan Data"]);
        }
    }

    function destroy($id)
    {
        $data = mISDN::findOrFail($id);
        if ($data->delete()) {
            return back()->with(["success" => "Berhasil Menghapus Data"]);
        } else {
            return back()->with(["error" => "Gagal Menghapus User Baru"]);
        }
    }
}
