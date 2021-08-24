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
                <h4 class="card-title">Unit : {{ $data->divisi_name }}</h4>
            </div>

            <div class="card-body">
                <form action='{{ url("problem/$data->id/update") }}' method="post">
                    <input type="hidden" name="id" value="">
                    <input type="hidden" name="id_divisi" value="{{ $data->id_divisi }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="basicInput">Order</label>
                                <input type="text" name="order" class="form-control"
                                    value="{{ old('order', $data->order) }}" placeholder="Order">
                            </div>

                            <div class="form-group">
                                <label for="">Perihal</label>
                                <textarea class="form-control" name="perihal" rows="3"
                                    placeholder="Perihal Problem">{{ $data->perihal }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="">Keterangan</label>
                                <textarea class="form-control" placeholder="Keterangan Masalah" name="keterangan" id=""
                                    rows="3">{{ $data->keterangan }}</textarea>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="">Status</label>
                                <select class="form-control form-select" name="status" id="">

                                    <option @if ($data->status == 'pending')
                                        selected
                                        @endif value="Pending">Pending</option>
                                    <option @if ($data->status == 'In Progress')
                                        selected
                                        @endif value="In Progress">In Progress</option>
                                    <option @if ($data->status == 'Finished')
                                        selected
                                        @endif value="Finished">Finished</option>
                            
                                    <option @if ($data->status == 'Canceled')
                                        selected
                                        @endif value="Canceled">Canceled</option>
                            
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


@endsection
