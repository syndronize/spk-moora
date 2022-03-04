@extends('backend/layout/app')
@section('content')
<title>Kriteria Form - Solok Radjo</title>
<br>
<br>
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 align="middle" class="card-title">Sub Kriteria Form - Solok Radjo</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ isset($sk) ? route('sk.update', $sk->id_sub_kriteria) : route('sk.store') }}"
        method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($sk))
            @isset($sk)
            @method('put')
            @endif
            @endif
            <div class="card-body">
                <input type="hidden" name="id_pengguna" value="{{session('id_pengguna')}}">
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c1_sub_kriteria"><b>Test Memiliki Air</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c1_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="1">Jumlah Memiliki Air 13-15%	</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for=""><b>Test Defect (Kecacatan)</b></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c21_sub_kriteria"><b>Biji Hitam</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c21_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.29">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c22_sub_kriteria"><b>Biji Coklat</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c22_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.32">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c23_sub_kriteria"><b>Biji Berjamur</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c23_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.25">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c24_sub_kriteria"><b>Kulit Kering</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c24_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.25">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c25_sub_kriteria"><b>Biji Berlubang</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c25_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.31">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c26_sub_kriteria"><b>Biji Putih</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c26_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.25">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c27_sub_kriteria"><b>Biji Rusak</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c27_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.28">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c28_sub_kriteria"><b>Biji Keriput</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c28_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.35">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c29_sub_kriteria"><b>Biji Berkuping</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c29_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.26">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for=""><b>Test Warna</b></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c31_sub_kriteria"><b>Biji Seragam</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c31_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="1.95">Memiliki</option>
                                <option value="0.05">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for=""><b>Test Bau Ketika Jadi Biji</b></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c41_sub_kriteria"><b>Caramel</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c41_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.16">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c42_sub_kriteria"><b>Fresh Butter</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c42_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.17">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c43_sub_kriteria"><b>Roasted Peanuts</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c43_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.23">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c44_sub_kriteria"><b>Roasted Hazelnuts</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c44_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.14">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c45_sub_kriteria"><b>Roasted Almonds</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c45_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.22">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c46_sub_kriteria"><b>Walnuts</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c46_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.23">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c47_sub_kriteria"><b>Dark Chocolate</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c47_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.12">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c48_sub_kriteria"><b>Vanilla</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c48_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.16">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c49_sub_kriteria"><b>Toast</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c49_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.12">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for=""><b>Test Bau Jadi Bubuk</b></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c51_sub_kriteria"><b>Earthy</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c51_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.16">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c52_sub_kriteria"><b>Lemon</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c52_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.17">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c53_sub_kriteria"><b>Straw</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c53_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.23">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c54_sub_kriteria"><b>Coffee Plup</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c54_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.14">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c55_sub_kriteria"><b>Basmati Rice</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c55_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.22">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c56_sub_kriteria"><b>Medicinal</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c56_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.23">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c57_sub_kriteria"><b>Smoke</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c57_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.12">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c58_sub_kriteria"><b>Peper</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c58_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.16">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="c59_sub_kriteria"><b>Coffee</b></label>
                        <div class="form-group">
                            <select class="form-control" name="c59_sub_kriteria" required>
                                <option disabled selected value=''>Select</option>
                                <option value="0.05">Memiliki</option>
                                <option value="0.12">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
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
