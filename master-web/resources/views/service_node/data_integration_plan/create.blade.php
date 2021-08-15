@extends('template')

@section('page-heading')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Service Node</h3>
                    <p class="text-subtitle text-muted">Service Node - Data Integration Plan</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/staff/manage') }}">Service Node - Data
                                    Integration Plan</a></li>
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
                <h4 class="card-title">Tambahkan Data Integration Plan</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('store_integration_plan') }}" method="post">
                    <input type="hidden" name="id" value="">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="basicInput">MGW Node</label>
                                <input type="text" name="mgw_node" required class="form-control"
                                    value="{{ old('mgw_node') }}" required id="basicInput" placeholder="MGW Node">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">STM-No</label>
                                <input type="text" name="stm_no" required class="form-control" value="{{ old('stn_no') }}"
                                    id=" basicInput" placeholder="STM-No">
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Logical E1</label>
                                <input type="text" name="logical_e1" class="form-control" value="{{ old('logical_e1') }}"
                                    placeholder="Logical E1">
                            </div>


                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="basicInput">TID Start</label>
                                <input type="text" name="tid_start" class="form-control" value="{{ old('tid_start') }}"
                                    placeholder="TID Start">
                            </div>

                            <div class="form-group">
                                <label for="basicInput">TID End</label>
                                <input type="text" name="tid_end" class="form-control" value="{{ old('tid_end') }}"
                                    placeholder="TID Start">
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Destination</label>
                                <input type="text" name="destination" class="form-control"
                                    value="{{ old('destination') }}" placeholder="Destination">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </div>

                </form>

            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="destroy-modal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title white" id="myModalLabel120">
                        Anda Yaking Ingin Menghapus Data Karyawan Ini ?
                    </h5>
                    <button type="button" class="close hide-modal" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Data Karyawan terkait akan dihapus.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary hide-modal" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class=" d-sm-block">Close</span>
                    </button>

                    <a class="btn-destroy" href="">
                        <button type="button" class="btn btn-danger ml-1 hide-modal " data-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class=" d-sm-block">Hapus Karyawan</span>
                        </button>
                    </a>

                </div>
            </div>
        </div>
    </div>
@endsection
