@extends('backend/layout/app')
@section('content')
<title>SPK Solok Radjo</title>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Hello, {{Session()->get('nama_pengguna')}}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">SPK Solok Radjo</h3>
            </div>
            <!-- /.card-header -->
            
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr align="center">
                        <th>No.</th>
                        <th>Nama Pemilik</th>
                        <th>Jumlah Memiliki Air 13% - 15%</th>
                        <th>Biji Hitam</th>
                        <th>Biji Coklat</th>
                        <th>Biji Berjamur</th>
                        <th>Kulit Kering</th>
                        <th>Biji Berlubang</th>
                        <th>Biji Putih</th>
                        <th>Biji Rusak</th>
                        <th>Biji Keriput</th>
                        <th>Biji Berkuping</th>
                        <th>Biji Seragam</th>
                        <th>Caramel</th>
                        <th>Fresh Butter</th>
                        <th>Roasted Peanuts</th>
                        <th>Roasted Hazelnuts</th>
                        <th>Roasted Almonds</th>
                        <th>Walnuts</th>
                        <th>Dark Chocolate</th>
                        <th>Vanilla</th>
                        <th>Toast</th>
                        <th>Earthy</th>
                        <th>Lemon</th>
                        <th>Straw</th>
                        <th>Coffee Plup</th>
                        <th>Basmati Rice</th>
                        <th>Medicinal</th>
                        <th>Smoke</th>
                        <th>Pepper</th>
                        <th>Clove Like</th>
                        <th>Nilai Akhir</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($home as $no=>$home )
                            <tr align="center">
                                <td>{{$no + 1}}</td>
                                <td>{{$home->nama_pengguna}}</td>
                                <td>{{$home->c1_sub_kriteria_nama}}</td>
                                <td>{{$home->c21_sub_kriteria_nama}}</td>
                                <td>{{$home->c22_sub_kriteria_nama}}</td>
                                <td>{{$home->c23_sub_kriteria_nama}}</td>
                                <td>{{$home->c24_sub_kriteria_nama}}</td>
                                <td>{{$home->c25_sub_kriteria_nama}}</td>
                                <td>{{$home->c26_sub_kriteria_nama}}</td>
                                <td>{{$home->c27_sub_kriteria_nama}}</td>
                                <td>{{$home->c28_sub_kriteria_nama}}</td>
                                <td>{{$home->c29_sub_kriteria_nama}}</td>
                                <td>{{$home->c31_sub_kriteria_nama}}</td>
                                <td>{{$home->c41_sub_kriteria_nama}}</td>
                                <td>{{$home->c42_sub_kriteria_nama}}</td>
                                <td>{{$home->c43_sub_kriteria_nama}}</td>
                                <td>{{$home->c44_sub_kriteria_nama}}</td>
                                <td>{{$home->c45_sub_kriteria_nama}}</td>
                                <td>{{$home->c46_sub_kriteria_nama}}</td>
                                <td>{{$home->c47_sub_kriteria_nama}}</td>
                                <td>{{$home->c48_sub_kriteria_nama}}</td>
                                <td>{{$home->c49_sub_kriteria_nama}}</td>
                                <td>{{$home->c51_sub_kriteria_nama}}</td>
                                <td>{{$home->c52_sub_kriteria_nama}}</td>
                                <td>{{$home->c53_sub_kriteria_nama}}</td>
                                <td>{{$home->c54_sub_kriteria_nama}}</td>
                                <td>{{$home->c55_sub_kriteria_nama}}</td>
                                <td>{{$home->c56_sub_kriteria_nama}}</td>
                                <td>{{$home->c57_sub_kriteria_nama}}</td>
                                <td>{{$home->c58_sub_kriteria_nama}}</td>
                                <td>{{$home->c59_sub_kriteria_nama}}</td>
                                <td>{{$home->hasil_final_sub_kriteria}}</td>
                                
                            </tr>
                        @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.row (main row) -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection
