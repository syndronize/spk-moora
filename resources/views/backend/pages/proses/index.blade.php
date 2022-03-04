@extends('backend/layout/app')
@section('content')
<title>SPK Solok Radjo</title>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <!-- <li class="breadcrumb-item"><a href="#">Proses</a></li> -->
                    <!-- <li class="breadcrumb-item active">Dashboard</li> -->
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
                        <th>Total Nilai C1</th>
                        <th>Total Nilai C2</th>
                        <th>Total Nilai C3</th>
                        <th>Total Nilai C4</th>
                        <th>Total Nilai C5</th>
                        <th>Nilai Akhir</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($proses as $no=>$proses )
                            <tr align="center">
                                <td>{{$no + 1}}</td>
                                <td>{{$proses->nama_pengguna}}</td>
                                <td>{{$proses->c1_sub_kriteria}}</td>
                                <td>{{$proses->c21_sub_kriteria}}</td>
                                <td>{{$proses->c22_sub_kriteria}}</td>
                                <td>{{$proses->c23_sub_kriteria}}</td>
                                <td>{{$proses->c24_sub_kriteria}}</td>
                                <td>{{$proses->c25_sub_kriteria}}</td>
                                <td>{{$proses->c26_sub_kriteria}}</td>
                                <td>{{$proses->c27_sub_kriteria}}</td>
                                <td>{{$proses->c28_sub_kriteria}}</td>
                                <td>{{$proses->c29_sub_kriteria}}</td>
                                <td>{{$proses->c31_sub_kriteria}}</td>
                                <td>{{$proses->c41_sub_kriteria}}</td>
                                <td>{{$proses->c42_sub_kriteria}}</td>
                                <td>{{$proses->c43_sub_kriteria}}</td>
                                <td>{{$proses->c44_sub_kriteria}}</td>
                                <td>{{$proses->c45_sub_kriteria}}</td>
                                <td>{{$proses->c46_sub_kriteria}}</td>
                                <td>{{$proses->c47_sub_kriteria}}</td>
                                <td>{{$proses->c48_sub_kriteria}}</td>
                                <td>{{$proses->c49_sub_kriteria}}</td>
                                <td>{{$proses->c51_sub_kriteria}}</td>
                                <td>{{$proses->c52_sub_kriteria}}</td>
                                <td>{{$proses->c53_sub_kriteria}}</td>
                                <td>{{$proses->c54_sub_kriteria}}</td>
                                <td>{{$proses->c55_sub_kriteria}}</td>
                                <td>{{$proses->c56_sub_kriteria}}</td>
                                <td>{{$proses->c57_sub_kriteria}}</td>
                                <td>{{$proses->c58_sub_kriteria}}</td>
                                <td>{{$proses->c59_sub_kriteria}}</td>
                                <td>{{$proses->pangkat_c1}}</td>
                                <td>{{$proses->pangkat_c2}}</td>
                                <td>{{$proses->pangkat_c3}}</td>
                                <td>{{$proses->pangkat_c4}}</td>
                                <td>{{$proses->pangkat_c5}}</td>
                                <td>{{$proses->hasil_final_sub_kriteria}}</td>
                                
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
