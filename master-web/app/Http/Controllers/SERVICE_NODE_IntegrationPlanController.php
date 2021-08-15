<?php

namespace App\Http\Controllers;

use App\Models\CME_PotensiPerangkat;
use App\Models\SERVICE_NODE_DataIntegrationNode;
use Illuminate\Http\Request;

class SERVICE_NODE_IntegrationPlanController extends Controller
{
    public function viewCreate()
    {
        return view('service_node.data_integration_plan.create');
    }
    public function viewManage()
    {
        $data = SERVICE_NODE_DataIntegrationNode::all();
        return view('service_node.data_integration_plan.manage')->with(compact('data'));
    }
    public function viewUpdate($id)
    {
        $data = SERVICE_NODE_DataIntegrationNode::where('id', '=', $id)->first();
        return view('service_node.data_integration_plan.edit')->with(compact('data'));
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

        $data = new SERVICE_NODE_DataIntegrationNode();
        $data->mgw_node = $request->mgw_node;
        $data->stm_no = $request->stm_no;
        $data->logical_e1 = $request->logical_e1;
        $data->tid_start = $request->tid_start;
        $data->tid_end = $request->tid_end;
        $data->destination = $request->destination;
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

        $data = SERVICE_NODE_DataIntegrationNode::findOrFail($id);
        $data->mgw_node = $request->mgw_node;
        $data->stm_no = $request->stm_no;
        $data->logical_e1 = $request->logical_e1;
        $data->tid_start = $request->tid_start;
        $data->tid_end = $request->tid_end;
        $data->destination = $request->destination;
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
}
