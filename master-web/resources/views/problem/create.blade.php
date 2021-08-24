@extends('template')

@section('page-heading')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Problem </h3>
                    <p class="text-subtitle text-muted">Problem</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Problem</a></li>
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
                <h4 class="card-title">Tambahkan Data Problem</h4>
                <h4 class="card-title">Unit : {{ $divisi_name }}</h4>
            </div>

            <div class="card-body">
                <form action="{{ url('problem/create') }}" method="post">
                    <input type="hidden" name="id" value="">
                    <input type="hidden" name="id_divisi" value="{{ $divisi_code }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="basicInput">Order</label>
                                <input type="text" name="order" class="form-control" value="{{ old('order') }}"
                                    placeholder="Order">
                            </div>

                            <div class="form-group">
                                <label for="">Perihal</label>
                                <textarea class="form-control" name="perihal" rows="3"
                                    placeholder="Perihal Problem"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="">Keterangan</label>
                                <textarea class="form-control" placeholder="Keterangan Masalah" name="keterangan" id=""
                                    rows="3"></textarea>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="">Status</label>
                                <select class="form-control form-select" name="status" id="">
                                    <option value="Pending">Pending</option>
                                    <option value="In Progress">In Progress</option>
                                    <option value="Finished">Finished</option>
                                    <option value="Canceled">Canceled</option>
                                </select>
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
