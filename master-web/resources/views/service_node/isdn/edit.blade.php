@extends('template')

@section('page-heading')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Service Node - ISDN</h3>
                    <p class="text-subtitle text-muted">Service Node - ISDN</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/staff/manage') }}">CService Node - ISDN</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-content')
    <section class="section">
        @include('components.message')
    </section>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Data ISDN</h4>
            </div>

            <div class="card-body">
                <form action="{{ url('/service-node/isdn/'.$data->id.'/update') }}" method="post">
                    <input type="hidden" name="id" value="">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="basicInput">TG No</label>
                                <input type="text" name="tg_no" required class="form-control" 
                                value="{{ old('tg_no',$data->tg_no) }}"
                                    required id="basicInput" placeholder="TG_NO">
                            </div>

                            <div class="form-group">
                                <label for="basicInput">TG Name</label>
                                <input type="text" name="tg_name" required class="form-control" 
                                value="{{ old('tg_name',$data->tg_name) }}"
                                    id=" basicInput" placeholder="TG Name">
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Sub Route Number</label>
                                <input type="text" name="sub_route_number" class="form-control"
                                 value="{{ old('sub_route_number',$data->sub_route_number) }}"
                                    placeholder="Sub Route Number">
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Name</label>
                                <input type="text" name="name" class="form-control"
                                 value="{{ old('name',$data->name) }}"
                                    placeholder="Name">
                            </div>

                        </div>

                        <div class="col-md-6">
                         
                            <div class="form-group">
                                <label for="basicInput">Name Customers</label>
                                <input type="text" name="name_customers" class="form-control"
                                 value="{{ old('name_customers',$data->name_customers) }}"
                                    placeholder="Name Customers">
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Signaling Link Number</label>
                                <input type="text" name="signaling link number" class="form-control" 
                                value="{{ old('signaling_link_number',$data->signaling_link_number) }}"
                                    placeholder="Signaling Link Number">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Telp</label>
                                <input type="text" name="telp" class="form-control" 
                                value="{{ old('telp',$data->telp) }}"
                                    placeholder="Telp">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" 
                                value="{{ old('keterangan',$data->keterangan) }}"
                                    placeholder="Keterangan">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Equipment ID</label>
                                <input type="text" name="equipment_id" class="form-control" 
                                value="{{ old('equipment_id',$data->equipment_id) }}"
                                    placeholder="Equipment ID">
                            </div>

                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </section>

@endsection
