@extends('backend/layout/app')
@section('content')
<title>Kriteria Form - Mediatama Assets</title>
<br>
<br>
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 align="middle" class="card-title">Kriteria Form - Mediatama Assets</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ isset($kriteria) ? route('kriteria.update', $kriteria->id_kriteria) : route('kriteria.store') }}"
        method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($kriteria))
            @isset($kriteria)
            @method('put')
            @endif
            @endif
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_kriteria">Nama Kriteria</label>
                    <input type="text" class="form-control @error('nama_kriteria') {{ 'is-invalid' }} @enderror"
                    value="{{ old('nama_kriteria') ?? $kriteria->nama_kriteria ?? ''}}" name="nama_kriteria"
                    placeholder="Type Here">
                    @error('nama_kriteria')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- select -->
                        <label for="tipe_kriteria">Tipe Kriteria</label>
                        <div class="form-group">
                            <select class="form-control" name="tipe_kriteria" required>
                                <option disabled selected value=''>Select</option>

                                <option value="cost">Cost</option>
                                <option value="benefit">Benefit</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nilai_sk_kriteria">Nilai Bobot Kriteria</label>
                    <input type="text" class="form-control @error('nilai_sk_kriteria') {{ 'is-invalid' }} @enderror"
                        value="{{ old('nilai_sk_kriteria') ?? $kriteria->nilai_sk_kriteria ?? ''}}" name="nilai_sk_kriteria"
                        placeholder="Type Here">
                    @error('nilai_sk_kriteria')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama_sk_kriteria">Nama Sub Kriteria</label>
                    <input type="text" class="form-control @error('nama_sk_kriteria') {{ 'is-invalid' }} @enderror"
                        value="{{ old('nama_sk_kriteria') ?? $kriteria->nama_sk_kriteria ?? ''}}" name="nama_sk_kriteria"
                        placeholder="Type Here">
                    @error('nama_sk_kriteria')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- select -->
                        <label for="jenis_sk_kriteria">Jenis Sub Kriteria</label>
                        <div class="form-group">
                            <select class="form-control" name="jenis_sk_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="Penuh">Penuh</option>
                                <option value="Memiliki">Memiliki</option>
                                <option value="Tidak Memiliki">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="bobot_sk_kriteria">Bobot Sub Kriteria</label>
                    <input type="text" class="form-control @error('bobot_sk_kriteria') {{ 'is-invalid' }} @enderror"
                        value="{{ old('bobot_sk_kriteria') ?? $kriteria->bobot_sk_kriteria ?? ''}}" name="bobot_sk_kriteria"
                        placeholder="Type Here">
                    @error('bobot_sk_kriteria')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>
@endsection
