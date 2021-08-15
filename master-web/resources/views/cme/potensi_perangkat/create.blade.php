@extends('template')

@section('page-heading')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>CME - Potensi Perangkat</h3>
                    <p class="text-subtitle text-muted">CME - Potensi Perangkat</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/staff/manage') }}">CME - Potensi
                                    Perangkat</a></li>
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
                <h4 class="card-title">Tambahkan Data Potensi Perangkat</h4>
            </div>

            <div class="card-body">
                <form action="{{ url('cme/potensi-perangkat/create') }}" method="post">
                    <input type="hidden" name="id" value="">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group ">
                                <label for="">Jenis Perangkat</label>
                                <select class="form-control form-select" name="jenis_perangkat" id="">
                                    <option value="DIESEL">DIESEL</option>
                                    <option value="BATTERY">BATTERY</option>
                                    <option value="BATTERY STARTER">BATTERY STARTER</option>
                                    <option value="AC / AIR CONDITIONER">AC / AIR CONDITIONER</option>
                                    <option value="RECTIFIER  A">RECTIFIER A</option>
                                    <option value="RECTIFIER  B">RECTIFIER B</option>
                                    <option value="MDP">MDP</option>
                                    <option value="SDP AC RUANG METRO/GPON">SDP AC RUANG METRO/GPON</option>
                                    <option value="SDP PEN RACK SENTRAL">SDP PEN RACK SENTRAL</option>
                                    <option value="SDP 1 RECTIFIER">SDP 1 RECTIFIER</option>
                                    <option value="SDP 2 RECTIFIER">SDP 2 RECTIFIER</option>
                                    <option value="SDP AC RUANG RECTIFIER">SDP AC RUANG RECTIFIER</option>
                                    <option value="SDP AC TRASNMISI">SDP AC TRASNMISI</option>
                                    <option value="GENERATOR">GENERATOR</option>
                                    <option value="ATS">ATS</option>
                                    <option value="INPUT PLN">INPUT PLN</option>
                                    <option value="INPUT DEG">INPUT DEG</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Merk</label>
                                <input type="text" name="merk" required class="form-control" value="{{ old('merk') }}"
                                    required id="basicInput" placeholder="Merk">
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Tipe</label>
                                <input type="text" name="type" required class="form-control" value="{{ old('type') }}"
                                    id=" basicInput" placeholder="Tipe">
                            </div>

                            <div class="form-group">
                                <label for="basicInput">No Seri</label>
                                <input type="text" name="no_seri" class="form-control" value="{{ old('no_seri') }}"
                                    placeholder="Nomor Seri">
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Kapasitas TPS</label>
                                <input type="text" name="kap_tps" class="form-control" value="{{ old('kap_tps') }}"
                                    placeholder="Kap TPS">
                            </div>

                        </div>

                        <div class="col-md-6">
                         
                            <div class="form-group">
                                <label for="basicInput">Kapasitas TPK</label>
                                <input type="text" name="kap_tpk" class="form-control" value="{{ old('kap_tpk') }}"
                                    placeholder="Kap TPK">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Beban</label>
                                <input type="text" name="beban" class="form-control" value="{{ old('beban') }}"
                                    placeholder="Beban">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Kondisi</label>
                                <input type="text" name="kondisi" class="form-control" value="{{ old('kondisi') }}"
                                    placeholder="Kondisi">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Tahun Operasi</label>
                                <input type="text" name="tahun_operasi" class="form-control" value="{{ old('tahun_operasi') }}"
                                    placeholder="Tahun Operasi">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" value="{{ old('keterangan') }}"
                                    placeholder="Keterangan">
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
